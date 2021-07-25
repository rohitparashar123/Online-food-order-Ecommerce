<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Cart;
use Session;
use DB;

class UserController extends Controller
{

public function register(){
return view('front.register');
}

public function doRegister(Request $a){
$a->validate([   
'name'=>'required',
'email'=>'required|email|unique:users',
'password'=>' required|min:8|max:12|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
]);
$data = new User;
// print_r($a->all());
$data->name=$a->name;
$data->email=$a->email;
$data->password=Hash::make($a->password);
$data->verification_code = sha1(time());
$data->save();
if($data != null){
MailController::sendSignupEmail($data->name, $data->email, $data->verification_code);
return redirect()->back()->with('do_login', 'Your account has been created. Please check email for verification link.');
}
return redirect()->back()->with('alert-danger', 'Something went wrong!');
}

public function verifyUser(Request $request){
$verification_code = \Illuminate\Support\Facades\Request::get('code');
$data = User::where(['verification_code' => $verification_code])->first();
if($data != null){
$data->is_verified = 1;
$data->save();
return redirect('/login_page')->with('do_login', 'Your account is verified. Please login!');
}
return redirect('/login_page')->with('alert-danger', 'Invalid verification code!');
}

public function login(Request $request){
if($request->session()->has('FRONT_LOGIN')){
return redirect('/');
}
else{
return view('front.login');
}
}

public function dologin(Request $b){
$b->validate([   
'email'=>'required|email',
'password'=>' required|min:8|max:12',
]);
$data=$b->all();
$session_id=Session::getId();
if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'is_verified'=>1]))
{
$b->session()->put('FRONT_LOGIN',true);
Cart::where('session_id',$session_id)->update(['user_email'=>$data['email']]);
return redirect('/')->with('do_login','Welcome to FoodBuddy 😍');
}
else{
return redirect()->back()->with('message','Invalid Email and Password');
}
}

 public function changepassword(Request $request)
    {
        $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return redirect('/User-account')->with('do_login','Password changed successfully.');
    }
}
