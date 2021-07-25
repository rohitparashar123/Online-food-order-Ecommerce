@extends('front/master')
@section('title','Login')
@section('content')
    <style type="text/css">
        .body_login {
   /* background-image: url('../images/bg-white1.jpg');
   */
    background-color: #ece4e4;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    max-width: 100%;    
}
.eye_position{
    position: relative;
    top: -30px;
    left: 430px;
    color: black;
}
.alert_message{
  background-color: white;
    font-weight: bolder;
    font-size: 11px;
    border: none;
    width: 74%;
    position: relative;
    left: 22px;
    top: -15px;
    bottom: -15px;
    margin-bottom: -25px;
    font-style: italic;
    color: green;
}
 .card{
  box-shadow: 2px 2px 5px #babecc, -5px -5px 10px hsl(0deg 0% 100% / 45%);
}
</style>
<div class="container-fluid body_login">
    <div class="row">
        <div class="col-md-6 display_none">
            <img src="../images/login_logo.png" class="img-fluid">
               <h2 class="main_title">FoodBuddy</h2>
               <p class="main_desc">Sign in or create an account</p>
            </div>
            <div class="col-md-5 form_responsive">
            <div class="card card_shadow" style="position: relative;top: 65px; padding: 20px;">
                <h2 id="signin" >Sign In</h2>
                <h6 id="new_user">New user? <a href="{{url('/register_page')}}" style="color: blue; " id="account">Create an Account</a></h6>  
                 <span class="alert_message">
                 <br>
               @if(session('message'))
               <p class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('message')}}
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
               </button>
               </p>
               @endif
              </span>
                <div class="card-body">
                    <form method="POST" action="{{route('front.dologin') }}">
                        @csrf
                        <div class="form-group">

                           
                                <input  type="email" class="form-control col-sm-10 input" placeholder="Enter Email-address" name="email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="error" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                                <input id="myInput" type="password" class="form-control col-sm-10 input" placeholder="Enter Password" name="password" required autocomplete="current-password">
                                <span onclick="myFunction()" class="fa fa-eye eye_position" style="color: black;"></span>
                                @error('password')
                                    <span class="error" role="alert">
                                       {{ $message }}
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group" style="margin-top: -10px;">
                     &nbsp;     
                                    <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                               
                        </div>

                       
                                <button type="submit" class="btn" id="signin_button">
                                    Login
                                </button>

                                
                                    <a class="btn btn-link_forget_password" id="forget_password" href="{{ url('/forget_password') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                <hr>
                         <br>
                           
                         <a href="{{ url('auth/google') }}" class="btn btn-google btn-user btn-block col-sm-10 input">
                        <i class="fab fa-google fa-fw"></i> Login with Google
                        </a>

                        
                        <!-- <a href="" class="btn btn-google btn-user btn-block col-sm-10 input">
                        <i class="fab fa-google fa-fw"></i> Login with Google
                        </a> -->
                        
                       <!--  <a href="" class="btn btn-facebook btn-user btn-block col-sm-10 input">
                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                        </a> 
 -->

                        <a href="{{ url('auth/facebook') }}" class="btn btn-facebook btn-user btn-block col-sm-10 input">
                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                        </a>

                        <!-- <a href="{{ url('/auth/redirect/github') }}" class="btn btn-github btn-user btn-block col-sm-10 input">
                        <i class="fab fa-github fa-fw"></i> Login with Github
                        </a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <script type="text/javascript">
        function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    </script>

@endsection    