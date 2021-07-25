<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if($request->session()->has('ADMIN_LOGIN')){
           return redirect('admin/dashboard');
        }
        else{
            
            return view('admin.admin_login');
        }
    }
    
    public function auth(Request $req){

          $email=$req->post('email');
          $password=$req->post('password');
          $result=Login::where(['email'=>$email])->first();
          if($result){

              $req->session()->put('ADMIN_LOGIN',true);
              $req->session()->put('ADMIN_ID',$result->id);
              return redirect('admin/dashboard');
            }else{
              $req->session()->flash('error','please enter valid password');
              return redirect('admin_login');
            }
    }

 public function dashboard(){
       return view('admin.dashboard'); 
   }
    
}
