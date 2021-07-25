<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/assets/img/favicon.ico')}}" />

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
</head>

<body>
<div class="container-fluid body_login">
    <div class="row">
        <div class="col-md-6">
            <img src="../images/login_logo.png" class="img-fluid">
               <h2 class="main_title">FoodBuddy</h2>
               <p class="main_desc">Sign in or create an account</p>
               </div>

             <div class="col-md-5">
               <div class="card card_shadow" style="position: relative;top: 35px; padding: 20px;">
                  <h2 id="signin" >Sign Up</h2>
                  <h6 id="new_user">Already a Member? <a href="{{url('login_page')}}" style="color: blue; " id="account">Sign In</a></h6>  
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
                                    <span class="error" role="alert" style="font-style: italic;">
                                       {{ $message }}
                                    </span>
                                @enderror
                           
                          </div>

                                <button type="submit" class="btn" id="signup_button">
                                   Register
                                </button>
                          <hr>
                         <br>

                        <a href="" class="btn btn-google btn-user btn-block col-sm-10 input">
                        <i class="fab fa-google fa-fw"></i> Login with Google
                        </a>

                        <a href="index.html" class="btn btn-facebook btn-user btn-block col-sm-10 input">
                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                        </a>

                        <a href="index.html" class="btn btn-github btn-user btn-block col-sm-10 input">
                        <i class="fab fa-github fa-fw"></i> Login with Github
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer strat -->
<footer class="bg-light theme1 position-relative">
    <!-- footer bottom start -->
    <div class="footer-bottom pt-80 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-30">
                    <div class="footer-widget mx-w-400">
                        <div class="footer-logo mb-35">
                            <a href="index.html">
                                <img src="{{url('front/assets/img/logo/logo-dark.jpg')}}" alt="footer logo">
                            </a>
                        </div>
                        <p class="text mb-30">We are a team of designers and developers that create high quality
                            Magento, Prestashop, Opencart.</p>
                        <div class="address-widget mb-30">
                            <div class="media">
                                <span class="address-icon mr-3">
                                    <img src="{{url('front/assets/img/icon/phone.png')}}" alt="phone">
                                </span>
                                <div class="media-body">
                                    <p class="help-text text-uppercase">NEED HELP?</p>
                                    <h4 class="title text-dark"><a href="tel:+1(123)8889999">(+800) 345 678</a></h4>
                                </div>
                            </div>
                        </div>

                        <div class="social-network">
                            <ul class="d-flex">
                                <li><a href="https://www.facebook.com/" target="_blank"><span
                                            class="icon-social-facebook"></span></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><span
                                            class="icon-social-twitter"></span></a></li>
                                <li><a href="https://www.youtube.com/" target="_blank"><span
                                            class="icon-social-youtube"></span></a></li>
                                <li class="mr-0"><a href="https://www.instagram.com/" target="_blank"><span
                                            class="icon-social-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title pb-20">
                                <h2 class="title text-dark text-uppercase">Information</h2>
                            </div>
                        </div>
                        <!-- footer-menu start -->
                        <ul class="footer-menu">
                            <li><a href="#">Delivery</a></li>
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="#">Secure payment</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Stores</a></li>
                        </ul>
                        <!-- footer-menu end -->
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title pb-20">
                                <h2 class="title text-dark text-uppercase">Custom Links</h2>
                            </div>
                        </div>
                        <!-- footer-menu start -->
                        <ul class="footer-menu">
                            <li><a href="#">Legal Notice</a></li>
                            <li><a href="#">Prices drop</a></li>

                            <li><a href="#">New products</a></li>

                            <li><a href="#">Best sales</a></li>

                            <li><a href="login.html">Login</a></li>

                            <li><a href="myaccount.html">My account</a></li>
                        </ul>
                        <!-- footer-menu end -->
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title pb-20">
                                <h2 class="title text-dark text-uppercase">Newsletter</h2>
                            </div>
                        </div>
                        <p class="text mb-20">You may unsubscribe at any moment. For that purpose, please find our
                            contact info in the legal notice.</p>
                        <div class="nletter-form mb-35">
                            <form class="form-inline position-relative"
                                action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                target="_blank" method="post">
                                <input class="form-control" type="text" placeholder="Your email address">
                                <button class="btn nletter-btn text-capitalize" type="submit">Sign
                                    up</button>
                            </form>
                        </div>

                        <div class="store d-flex">
                            <a href="https://www.apple.com/" class="d-inline-block mr-3"><img
                                   src="{{url('front/assets/img/icon/apple.png')}}" alt="apple icon"> </a>
                            <a href="https://play.google.com/store/" class="d-inline-block"><img
                                    src="{{url('front/assets/img/icon/play.png')}}" alt="apple icon"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom end -->
    <!-- coppy-right start -->
    <div class="coppy-right pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-left">
                        <p class="mb-3 mb-md-0">Copyright &copy; <a href="https://hasthemes.com/">HasThemes</a>. All
                            Rights Reserved</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="text-left">
                        <img src="{{url('front/assets/img/payment/1.png')}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- coppy-right end -->
</footer>
<!-- footer end -->

<!-- modals start -->
<!-- first modal -->
<div class="modal fade theme1 style1" id="quick-view" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 mx-auto col-lg-5 mb-5 mb-lg-0">
                        <div class="product-sync-init mb-20">
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="front/assets/img/slider/thumb/1.jpg" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="front/assets/img/slider/thumb/2.jpg" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="front/assets/img/slider/thumb/3.jpg" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="front/assets/img/slider/thumb/4.jpg" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>

                        <div class="product-sync-nav">
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"> <img src="front/assets/img/slider/thumb/1.1.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"> <img src="front/assets/img/slider/thumb/2.1.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="front/assets/img/slider/thumb/3.1.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="front/assets/img/slider/thumb/4.1.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-7 mt-5 mt-md-0">
                        <div class="modal-product-info">
                            <div class="product-head">
                                <h2 class="title">New Balance Running Arishi trainers in triple</h2>
                                <h4 class="sub-title">Reference: demo_5</h4>
                                <div class="star-content mb-20">
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on de-selected"><i class="fas fa-star"></i> </span>
                                </div>
                            </div>
                            <div class="product-body">
                                <span class="product-price text-center"> <span class="new-price">$29.00</span>
                                </span>
                                <p>Break old records and make new goals in the New Balance® Arishi Sport v1.</p>
                                <ul>
                                    <li>Predecessor: None.</li>
                                    <li>Support Type: Neutral.</li>
                                    <li>Cushioning: High energizing cushioning.</li>
                                </ul>
                            </div>
                            <div class="d-flex mt-30">
                                <div class="product-size">
                                    <h3 class="title">Dimension</h3>
                                    <select>
                                        <option value="0">40x60cm</option>
                                        <option value="1">60x90cm</option>
                                        <option value="2">80x120cm</option>

                                    </select>
                                </div>
                            </div>
                            <div class="product-footer">
                                <div class="product-count style d-flex flex-column flex-sm-row my-4">
                                    <div class="count d-flex">
                                        <input type="number" min="1" max="10" step="1" value="1">
                                        <div class="button-group">
                                            <button class="count-btn increment"><i
                                                    class="fas fa-chevron-up"></i></button>
                                            <button class="count-btn decrement"><i
                                                    class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn theme-btn--dark1 btn--xl mt-5 mt-sm-0 rounded-5">
                                            <span class="mr-2"><i class="ion-android-add"></i></span>
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="addto-whish-list">
                                    <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                                    <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                                </div>
                                <div class="pro-social-links mt-10">
                                    <ul class="d-flex align-items-center">
                                        <li class="share">Share</li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-google"></i></a></li>
                                        <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- second modal -->
<div class="modal fade style2" id="compare" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="title"><i class="fa fa-check"></i> Product added to compare.</h5>
            </div>
        </div>
    </div>
</div>
<!-- second modal -->
<div class="modal fade style3" id="add-to-cart" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center bg-dark">
                <h5 class="modal-title" id="add-to-cartCenterTitle"> <span class="ion-checkmark-round"></span>
                    Product successfully added to your shopping cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5 divide-right">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="front/assets/img/modal/1.jpg" alt="img">
                            </div>
                            <div class="col-md-6 mb-2 mb-md-0">
                                <h4 class="product-name">New Balance Running Arishi trainers in triple</h4>
                                <h5 class="price">$$29.00</h5>
                                <h6 class="color"><strong>Dimension: </strong>: <span class="dmc">40x60cm</span> </h6>
                                <h6 class="quantity"><strong>Quantity:</strong>&nbsp;1</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="modal-cart-content">
                            <p class="cart-products-count">There is 1 item in your cart.</p>
                            <p><strong>Total products:</strong>&nbsp;$123.72</p>
                            <p><strong>Total shipping:</strong>&nbsp;$7.00 </p>
                            <p><strong>Taxes</strong>&nbsp;$0.00</p>
                            <p><strong>Total:</strong>&nbsp;$130.72 (tax excl.)</p>
                            <div class="cart-content-btn">
                                <button type="button" class="btn theme-btn--dark1 btn--md mt-4"
                                    data-dismiss="modal">Continue
                                    shopping</button>
                                <button class="btn theme-btn--dark1 btn--md mt-4"><i
                                        class="ion-checkmark-round"></i>Proceed to
                                    checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modals end -->

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

    <!--*********************** 
        all js files
     ***********************-->

    <!--****************************************************** 
        jquery,modernizr ,poppe,bootstrap,plugins and main js
     ******************************************************-->

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>