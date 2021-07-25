@extends('front.master')

@section('title','FoodBuddy | Wishlist')

@section('content')  
    
                    @if(session('message'))

                         <p class ="alert alert-success">
                          {{session('message')}}
                         </p>
                    @endif

                    @if(session('error'))

                         <p class ="alert alert-danger">
                          {{session('error')}}
                         </p>

                    @endif
            
         

   
<!-- breadcrumb-section end -->
                 

<!-- product tab start -->
<section class="blog-section pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-title">
                    <h2 class="title">Wishlist </h2>
                    <p class="text">These are your Wishllisted Product</p>
                </div>
            </div>
        </div>
        <div class="row">
              @if(count($wish) > 0)

                    @foreach ($wish as $prod)
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-30" style=" box-shadow: 0px 0px 25px rgb(0 0 0 / 10%); margin: 5px;">
                <div class="single-blog text-left">
                    <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden mt-2" href="{{url('productdetail/'.$prod->id)}}">
                        <img src="{{ url('/upload/'.$prod->product_image) }}" style="width: 100%;">
                    </a>
                    <div class="blog-post-content">
                        <h3 class="title mb-15"><a href="{{url('productdetail/'.$prod->id)}}">{{$prod->product_name}}</a></h3>
                        <p class="text">
                           ₹ {{$prod->product_price}}
                        </p> 
                         <form method="post" action="{{url('addtocart')}}">

                                @csrf

                                <input type="hidden" name="product_id" value="{{$prod->id}}">

                                <input type="hidden" name="product_name" value="{{$prod->product_name}}">

                                <input type="hidden" name="product_quantity" value="1">

                                <input type="hidden" name="product_price" value="{{$prod->product_price}}">

                                <input type="hidden" name="product_image" value="{{$prod->product_image}}">

                            <button class="btn theme-btn--dark1 btn--md" style="padding: 10px; box-shadow: 0px 0px 25px rgb(0 0 0 / 10%);">
                                         Add to Cart <i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;<sup><i class="ion-android-add"></i></sup>
                                    </button>

                                    <a href="{{url('wishlist/itemdelete/'.$prod->id)}}" type="button" class=" btn-lg" style="float:right;"><i class="fas fa-trash-alt"></i></a>
                        </form>    
                        <br>            
                    </div>
                </div>
            </div>

            @endforeach

                @else
                    
                    <center><img src="http://www.cheemastudio.com/no-product-found.jpg" class="col-md-5 mt-30" style="max-width: 20%;"></center>

                @endif
        </div>
    </div>
</section>
<!-- product tab end -->
@endsection