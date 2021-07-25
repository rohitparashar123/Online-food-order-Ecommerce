@extends('front/master')
@section('title','Register')
@section('content')
        <style type="text/css">
        .body_login {
    /*background-image: url('../images/login4.jpg');*/
    background-color: #ece4e4;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    max-width: 100%;    
}
   .error{
            position: relative;
            top: 5px;
           left: 10px;
            font-size: 16px;
            font-weight: bolder;
            background-color: white;
            border: none;
            color: red;

         }
.eye_position{
    position: relative;
    top: -30px;
    left: 430px;
    color: black;
}
    </style>
<div class="container-fluid body_login">
    <div class="row">
        <div class="col-md-6 display_none">
            <img src="../images/login_logo.png" class="img-fluid">
               <h2 class="main_title">FoodBuddy</h2>
               <p class="main_desc">Sign in or create an account</p>
               </div>

             <div class="col-md-5 form_responsive_register">
               <div class="card card_shadow" style="position: relative;top: 35px; padding: 20px;">
                  <h2 id="signin" >Sign Up</h2>
                  <h6 id="new_user">Already a Member? <a href="{{url('login_page')}}" style="color: blue; " id="account">Sign In</a></h6>
                   <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
            </div>  
                <div class="card-body">
                    <form method="post" action="{{url('/registering_user')}}">
                        @csrf
                        <div class="form-group">
                                <input  type="text" class="form-control col-sm-10 input" name="name" placeholder="Enter Your Name" required autocomplete="name" autofocus>
                                 @error('name')
                                  <span class="error" style="font-style: italic;">
                                 {{$message}}
                                 </span>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control col-sm-10 input" name="email" placeholder="Enter your Email" required autocomplete="email">
                                @error('email')
                                    <span class="error" role="alert" style="font-style: italic;">
                                        {{ $message }}
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="myInput" type="password" class="form-control col-sm-10 input" placeholder="Enter Your Password" name="password" required autocomplete="new-password">
                                 <span onclick="myFunction()" class="fa fa-eye eye_position" style="color: black;"></span>
                                @error('password')
                                    <span class="error long_error" role="alert" style="font-style: italic;">
                                       {{ $message }}
                                    </span>
                                @enderror
                           
                          </div>

                                <button type="submit" class="btn" id="signup_button">
                                   Register
                                </button>
                          <hr>
                         <br>

                         <!-- <a href="{{ url('auth/google') }}" class="btn btn-google btn-user btn-block col-sm-10 input">
                        <i class="fab fa-google fa-fw"></i> Login with Github
                        </a> -->

                        <a href="" class="btn btn-google btn-user btn-block col-sm-10 input">
                        <i class="fab fa-google fa-fw"></i> Login with Google
                        </a>

                        <a href="index.html" class="btn btn-facebook btn-user btn-block col-sm-10 input">
                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer strat -->

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