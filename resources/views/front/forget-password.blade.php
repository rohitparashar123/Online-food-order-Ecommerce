@extends('front/master')
@section('title','FoodBuddy')
@section('content')
<style type="text/css">
  .alert_message{
text-align: center;
justify-content: center;
position: relative;
left: 220px;
}
@media screen and (max-width: 576px) {
   .alert_message{
text-align: center;
justify-content: center;
position: relative;
left: 220px;
}
}
.card{
  box-shadow: 2px 2px 5px #babecc, -5px -5px 10px hsl(0deg 0% 100% / 45%);
}
</style>
<div class="container mt-5 mb-5">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header text-center"><strong>Forget Password</strong></div>
                
               <div class="card-body">
                    <span class="alert_message">
                 <br>
               @if(session('message'))
               <p class="alert alert-success alert-dismissible fade show " role="alert">
                  {{session('message')}}
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
               </button>
               </p>
               @endif
              </span>
                  
                   <form method="POST" action="{{url('/forget_password')}}">
                        @csrf
                          <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address:</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   <div class="form-group row mb-0">
                         <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn theme-btn--dark1 btn--md">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection