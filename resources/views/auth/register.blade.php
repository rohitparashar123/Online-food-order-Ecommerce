@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <img src="../images/login_logo.png" class="img-fluid">
               <h2 class="main_title">Admin</h2>
               <p class="main_desc">Sign in or create an account</p>
               </div>

             <div class="col-md-5">
               <div class="card card_shadow" style="position: relative;top: 25px;">
                  <h2 id="signin" >Sign Up</h2>
                 
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">

                           
                                <input id="name" type="text" class="form-control col-sm-10 input  @error('name') is-invalid @enderror" name="name" placeholder="Enter Your Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span class="fas fa-user icon"></span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                        <div class="form-group">
                           

                           
                                <input id="email" type="email" class="form-control col-sm-10 input  @error('email') is-invalid @enderror" name="email" placeholder="Enter your Email" value="{{ old('email') }}" required autocomplete="email">
                                <span class="fas fa-envelope icon"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                           
                            
                                <input id="password" type="password" class="form-control col-sm-10 input  @error('password') is-invalid @enderror" placeholder="Enter Your Password" name="password" required autocomplete="new-password">
                                <span class="fas fa-key icon"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group">
                           

                         
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control col-sm-10 input" name="password_confirmation" required autocomplete="new-password">
                                <span class="fas fa-key icon"></span>
                            
                        </div>

                       
                                <button type="submit" class="btn" id="signin_button">
                                    {{ __('Register') }}
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
      
   @endsection