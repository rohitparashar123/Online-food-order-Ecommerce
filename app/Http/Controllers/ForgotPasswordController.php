<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use DB; 
use Carbon\Carbon; 
use Mail; 

class ForgotPasswordController extends Controller
{
  public function getEmail()
  {

     return view('front.forget-password');
  }

 public function postEmail(Request $request)
  {
    $request->validate([
        'email' => 'required|email|exists:users',
    ]);

    $token = str_random(64);

      DB::table('password_resets')->insert(
          ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
      );

      Mail::send('front.verify-email', ['token' => $token], function($message) use($request){
          $message->to($request->email);
          $message->subject('Reset Password Notification');
      });

      return back()->with('info_msg', 'We have e-mailed your password reset link, Check your Gmail!');
  }
}
