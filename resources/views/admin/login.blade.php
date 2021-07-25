<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <meta name="description" content="" />
      <title>Admin Login</title>
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('../images/favicon.png')}}" />
      <!--********************************** 
         all css files 
         *************************************-->
      <!--*************************************************** 
         fontawesome,bootstrap,plugins and main style css
         ***************************************************-->
      <link rel="stylesheet" href="{{asset('front/assets/css/fontawesome.min.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/ionicons.min.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/simple-line-icons.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/plugins/jquery-ui.min.css')}}">
      <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/plugins/plugins.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/style.min.css')}}" />
      <link rel="stylesheet" href="{{asset('../css/style.css')}}" />
      <!-- Use the minified version files listed below for better performance and remove the files listed above -->
      <!--**************************** 
         Minified  css 
         ****************************-->
      <!--*********************************************** 
         vendor min css,plugins min css,style min css
         ***********************************************-->
      <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
         <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
         <link rel="stylesheet" href="assets/css/style.min.css" /> -->
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
#admin{
  position: relative;
  top: 0px;
  left: 140px;
  font-size: 2.4rem;
  font-weight: bolder;
  color: red;
  text-shadow: 2px 3px 1px #171717;
}
.card_mobile{
  position: relative;
  top: 170px;
  padding: 20px;
}
.card_mobile:hover{
    box-shadow: 0 20px 40px -25px #2c89b4;
    transition: ease-in-out .4s;
}
@media  screen and (max-width: 576px) {
  .card_mobile{
    position: relative;
    top: 100px;
  }
  .card_mobile:hover{
    box-shadow: 0 20px 40px -25px #2c89b4;
    transition: ease-in-out .4s;
}
#admin{
  position: relative;
  top: 0px;
  left: 50px;
  font-size: 2.4rem;
  font-weight: bolder;
  color: red;
  text-shadow: 2px 3px 1px #171717;
}
}


    </style>
   </head>
   <body class="body_login">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 display_none">
            <img src="../images/login_logo.png" class="img-fluid">
               <h2 class="main_title">FoodBuddy</h2>
               <p class="main_desc" style="left: 268px;">Admin Login</p>
            </div>
            <div class="col-md-5 form_responsive">
            <div class="card card_shadow card_mobile">
                <h2 id="admin">Admin Panel</h2>
                <span class="" style="color: white; margin-top: 15px;">
                               @if(session()->has('error'))
                               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                               {{session('error')}} 
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              @endif
                            </span>
                <div class="card-body">
                    <form method="POST" action="{{route('admin.auth') }}">
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
                        <button type="submit" class="btn btn-facebook btn-user btn-block col-sm-10 input">Login</button>
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

 <script src="{{asset('front/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
      <script src="{{asset('front/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
      <script src="{{asset('front/assets/js/popper.min.js')}}"></script>
      <script src="{{asset('front/assets/js/plugins/jquery-ui.min.js')}}"></script>
      <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('front/assets/js/plugins/plugins.js')}}"></script>
      <script src="{{asset('front/assets/js/main.js')}}"></script>
      <!-- Use the minified version files listed below for better performance and remove the files listed above -->
      <!--*************************** 
         Minified  js 
         ***************************-->
      <!--*********************************** 
         vendor,plugins and main js
         ***********************************-->
      <!-- <script src="front/assets/js/vendor/vendor.min.js"></script>
         <script src="front/assets/js/plugins/plugins.min.js"></script>
         <script src="front/assets/js/main.js"></script> -->
   </body>
</html>   