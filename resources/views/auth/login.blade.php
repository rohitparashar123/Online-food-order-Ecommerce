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
                <h2 id="signin" >Sign In</h2>
                

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">

                           
                                <input id="email" type="email" class="form-control col-sm-10 input @error('email') is-invalid @enderror" placeholder="Enter Email-address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">

                            
                                <input id="password" type="password" class="form-control col-sm-10 input @error('password') is-invalid @enderror" placeholder="Enter Password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group">
                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; 
                                    <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                               
                        </div>

                       
                                <button type="submit" class="btn " id="signin_button">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link_forget_password " id="forget_password" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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