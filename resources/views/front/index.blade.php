@extends('front/master')
@section('title','FoodBuddy')
@section('content')
<style type="text/css">
   .bg-image{
   background-repeat: no-repeat!important; 
   background-position: center center;
   background-size: cover!important;
   }
   .whatsapp-icon{
   position: fixed;
   bottom: 51px;
   width: 40px;
   height: 40px;
   right: 0px;
   }
   .section_top{
   position: relative;
   top: -90px;
   margin-bottom: 145px;
   }
   @media screen and (max-width: 576px){
  .big_heading{
   font-size: 25px!important;
    font-weight: 600!important;
    line-height: 1!important;
    letter-spacing: -.45px!important;
    padding: 0px;
    position: relative;
    top: -130px;
   }
   .small_heading {
    font-size: 20px;
    width: 400px;
    font-weight: 300;
    /* padding-top: 20px; */
    /* padding-bottom: 60px; */
    color: #7e808c;
    /* line-height: 1.2; */
    position: relative;
    top: -130px;
    padding: -72px;
    /* margin: -4px; */
    text-align: justify;
    padding-right: 100px;
   }
   .google_play{
    position: relative;
    top: -145px;
    width: 150px;
   }
   .google_play1{
    position: relative;
    left: -10px;
    top: -145px;
    width: 150px;

   }
    #image_mobile2{
           position: relative!important;
    left: -1255px!important;
    max-width: 17%;
    height: auto;
    top: 134px!important;
}
   #image_mobile11{
    position: relative!important;
    top: 228px!!important;
    left: -1236px!important;
    max-width: 17%;
    height: auto;
    margin-top: 696px;

   }

   }
   .section_top_girl{
   position: relative;
   top: -235px;
   background-color: #171717;
   }
   @media screen and (max-width: 576px){
   
   }
   #image_mobile2{
   position: relative;
   top: 204px;
   left: 15px;
   }
   #image_mobile11{
   position: relative;
   top: -191px;
   left: 374px;
   }
   #image_girl{
   position: relative;
   top: 0px;
   left: 258px;
   max-width: 70%;
   height: auto;
   }
   .responsive{
   padding: 0 20px;
   height: 570px;
   overflow: hidden;
   }
   .row_responsive{
   max-width: 1200px;
   min-width: 1200px;
   position: relative;
   margin: 0 auto;
   display: -ms-flexbox;
   display: flex;
   -ms-flex-direction: column;
   flex-direction: column;
   -ms-flex-pack: center;
   justify-content: center;
   height: 100%;
   }
   .big_heading{
   font-size: 40px;
   font-weight: 600;
   width: 300px;
   line-height: 1;
   letter-spacing: -.45px;
   }
   .big_heading_{
   font-size: 40px;
   font-weight: 600;
   color: white;
   line-height: 1;
   letter-spacing: -.45px;
   text-align: justify;
   }
   .small_heading{
   font-size: 20px;
   width: 400px;
   font-weight: 300;
   padding-top: 20px;
   padding-bottom: 60px;
   color: #7e808c;
   line-height: 1.2;
   }
   .small_heading_girl{
   font-size: 17px;
   width: 530px;
   text-align: justify;
   font-weight: 300;
   padding-top: 20px;
   padding-bottom: 60px;
   line-height: 1.2;
   }
   .top_heading_girl{
   position: relative;
   text-align: center;
   font-size: 20px;
   color: red;
   }
   .image_girl1{
   position: relative;
   top: -50px;
   width: 220px;
   height: 271px;
   left: 99px;
   }
   .girl_cook3{
   position: relative;
   top: -10px;
   left: -48px;
   }
     .img-responsive{
        width: 250px;
        height: 200px;
    }
    @media screen and (max-width: 576px) {
        .img-responsive{
        width: 360px;
        height: 260px;
    }
    }
</style>
<!-- main slider start -->
<section class="bg-light position-relative">
   <div class="main-slider dots-style theme1">
      @foreach($banner as $banner)
      <div class="slider-item bg-image" style="background: url('{{ url('/upload/'.$banner->image)}}'); width: 100%; height: 100%;">
         <div class="container">
            <div class="row align-items-center slider-height">
               <div class="col-12">
                  <div class="slider-content">
                     <h5 class="sub-title text-white animated" data-animation-in="fadeInRight" data-delay-in="2" style="font-size: 40px; font-weight: 500;">
                        {{$banner->title}}
                     </h5>
                     <a href="shop-grid-4-column.html"
                        class="btn theme--btn1 btn--lg text-uppercase rounded-5 animated mt-45 mt-sm-25"
                        data-animation-in="zoomIn" data-delay-in="3">Order now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endforeach
      <!-- slider-item end -->
   </div>
   <!-- slick-progress -->
   <div class="slick-progress">
      <span></span>
   </div>
   <!-- slick-progress end-->
</section>

<!-- main slider end -->
<!-- common banner  start -->
<div class="common-banner pt-80 bg-white">
   <div class="container">
       <div class="row">
           <div class="col-md-6 mb-30">
               <div class="banner-thumb">
                   <a href="#" class="zoom-in d-block overflow-hidden">
                       <img src="https://source.unsplash.com/690x400/?street-food" alt="banner-thumb-naile">
                   </a>
               </div>
           </div>
           <div class="col-md-3 col-sm-6 mb-30">
               <div class="banner-thumb">
                   <a href="#" class="zoom-in d-block overflow-hidden">
                       <img src="https://source.unsplash.com/330x400/?food" alt="banner-thumb-naile">
                   </a>
               </div>
           </div>
           <div class="col-md-3 col-sm-6 mb-30">
               <div class="banner-thumb">
                   <a href="#" class="zoom-in d-block overflow-hidden">
                       <img src="https://source.unsplash.com/330x400/?indian-food" alt="banner-thumb-naile">
                   </a>
               </div>
           </div>
       </div>
   </div>
   </div>
<!-- common banner  end -->
<!-- product tab start -->
<section class="product-tab theme3 bg-white pt-50 pb-80">
    <div class="container">
        <div class="product-tab-nav mb-35">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title text-center mb-30">
                        <h2 class="title text-dark text-capitalize">Our products</h2>
                        <p class="text mt-10">Add our products to weekly line up</p>
                    </div>
                </div>
                <div class="col-12">
                    <nav class="product-tab-menu theme1">
                        
                         <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">

                            @foreach ($categories as $key=>$category)
                            <li class="nav-item">
                                <a  class="nav-link {{ $key==0 ? 'active' : '' }}" id="pills-home-tab" data-toggle="pill" role="tab" aria-controls="pills-home" href="#pills-category_{{$category->id}}" aria-selected="true"   
                                    >{{$category->name}}</a>
                            </li>
                            
                            @endforeach
                        </ul>
                    
                    </nav>
                </div>
            </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                  
                    <!-- first tab-pane -->
                    @foreach ($categories as $key=>$category )
                        
                   
                    <div class="tab-pane fade show {{ $key==0 ? 'active' : ''}}" 
                       id="pills-category_{{$category->id}}"  role="tabpanel"
                        aria-labelledby="pills-home-tab">
                       
                        <div class="product-slider-init theme1 slick-nav">                        
                            
                       
                                   
                            @php

                            $c_products=DB::table('products')->where('category_id',$category->id)->get();
                
                            @endphp
                              
                           

                            @foreach ($c_products as $products)
                                
                           
                            <div class="slider-item">
                                <div class="product-list mb-30">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
           
                                 <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                                
                                                
                                                <a href="{{url('productdetail/'.$products->id)}}">
                                                    <img src="{{ url('/upload/'.$products->product_image) }}" 
                                                    alt="1" class="img-responsive">
                                                </a>
                                             
                                               

                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="{{'productdetail/'.$products->product_name}}">
                                                        {{$products->product_name}}</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price"><span>₹
                                                        </span> {{$products->product_price}}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            @endforeach
                            <!-- slider-item end -->
                        </div>
                    </div>
                     @endforeach
                   
                </div>
               
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
<!-- simple section start -->
<section class="section_top">
   <div class="container responsive">
      <div class="row row_responsive">
         <div class="col-md-5">
            <div class="big_heading" style="color: black; font-family: ProximaNova,Arial,Helvetica Neue,sans-serif;">Restaurants in Your Pocket</div>
            <div class="small_heading">
               Order from your favorite restaurants & track on the go,with FoodBuddy.
            </div>
            <div>
               <a href="" style="text-decoration: none; background-color: transparent;">
               <img src="../images/googleplay1.png" class="google_play" style="margin-right: 20px;" width="200">
               </a>
               <a href="" style="text-decoration: none; background-color: transparent;">
               <img src="../images/googleplay2.png" class="google_play1" width="200">
               </a>
            </div>
         </div>
         <div class="col-md-7">
            <img src="../images/mobile2.png" id="image_mobile2" width="384" height="489">
            <img src="../images/mobile11.png" id="image_mobile11"  width="384" height="489">
         </div>
      </div>
   </div>
</section>
<section class="section_top_girl">
   <div class="container responsive">
      <div class="row row_responsive">
         <div class="col-md-7">
            <img src="../images/girl_cook3.jpg" width="700px" class="girl_cook3">   
         </div>
         <div class="col-md-5">
            <div class="big_heading_" style="color: white; font-family: ProximaNova,Arial,Helvetica Neue,sans-serif;">Taste Of Delicious Food with Professional Chef</div>
            <div class="small_heading">
               We make the food according to the taste of our beloved Customers!!!
            </div>
            <div>
               <a href="shop-grid-4-column.html"
                  class="text-uppercase btn theme--btn1 btn--lg banner-btn" style=" position:relative; top: -25px; left: 75px;">Order Now</a>
               <img src="../images/girl_cook1.png" class="image_girl1" data-animation-in="zoomIn">
               <div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- simple section end -->
<!-- common banner  start -->
<!-- product tab repetation end -->
<!-- common banner  start -->
<div class="common-banner bg-white pb-50" style="position: relative; top: -180px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-30">
                <div class="banner-thumb common-bthumb1">
                    <a href="#" class="zoom-in d-block overflow-hidden">
                        <img src="https://source.unsplash.com/690x250/?italian-food" alt="banner-thumb-naile">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="banner-thumb common-bthumb1">
                    <a href="#" class="zoom-in d-block overflow-hidden">
                        <img src="https://source.unsplash.com/690x250/?fast-food" alt="banner-thumb-naile">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- common banner  end -->
<!-- featured  slider start-->
<div class="common-banner bg-white pb-50">
    <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-6 mb-30">
              <div class="banner-thumb">
                  <div class="zoom-in d-block overflow-hidden position-relative">
                      <img src="https://source.unsplash.com/450x570/?fast-food" alt="banner-thumb-naile">
                      <a href="{{url('punjabi_food')}}"
                          class="text-uppercase btn theme--btn1 btn--lg banner-btn position-absolute">Punjabi Food</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-30">
              <div class="banner-thumb">
                  <div class="zoom-in d-block overflow-hidden position-relative">
                      <img src="https://source.unsplash.com/450x570/?fast-food" alt="banner-thumb-naile">
                      <a href="shop-grid-4-column.html"
                          class="text-uppercase btn theme--btn1 btn--lg banner-btn position-absolute">woMen’s</a>
                  </div>
      
              </div>
          </div>
          <div class="col-lg-4 col-md-12 mb-30">
              <div class="banner-thumb">
                  <div class="zoom-in d-block overflow-hidden position-relative mb-30">
                      <img src="https://source.unsplash.com/450x270/?fast-food" alt="banner-thumb-naile">
                      <a href="shop-grid-4-column.html"
                          class="text-uppercase btn theme--btn1 btn--lg banner-btn position-absolute">running</a>
                  </div>
                  <div class="zoom-in d-block overflow-hidden position-relative">
                      <img src="https://source.unsplash.com/450x270/?fast-food" alt="banner-thumb-naile">
                      <a href="shop-grid-4-column.html"
                          class="text-uppercase btn theme--btn1 btn--lg banner-btn position-absolute">accessories</a>
                  </div>
              </div>
          </div>
      </div>
      </div>
</div>
<!-- common banner  end -->
<!-- product tab repetation start -->

<!-- product tab repetation end -->
<!-- staic media start -->
 <section class="static-media-section pb-80 bg-white">
   <div class="container">
       <div class="static-media-wrap theme-bg rounded-5">
           <div class="row">
               <div class="col-lg-3 col-sm-6 py-3">
                   <div class="d-flex static-media2 flex-column flex-sm-row">
                       <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="front/assets/img/icon/2.png"
                           alt="icon">
                       <div class="media-body">
                           <h4 class="title text-capitalize text-white">Free Shipping</h4>
                           <p class="text text-white">On all orders over $75.00</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6 py-3">
                   <div class="d-flex static-media2 flex-column flex-sm-row">
                       <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="front/assets/img/icon/3.png"
                           alt="icon">
                       <div class="media-body">
                           <h4 class="title text-capitalize text-white">Free Returns</h4>
                           <p class="text text-white">Returns are free within 9 days</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6 py-3">
                   <div class="d-flex static-media2 flex-column flex-sm-row">
                       <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="front/assets/img/icon/4.png"
                           alt="icon">
                       <div class="media-body">
                           <h4 class="title text-capitalize text-white">100% Payment Secure</h4>
                           <p class="text text-white">Your payment are safe with us.</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6 py-3">
                   <div class="d-flex static-media2 flex-column flex-sm-row">
                       <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="front/assets/img/icon/5.png"
                           alt="icon">
                       <div class="media-body">
                           <h4 class="title text-capitalize text-white">Support 24/7</h4>
                           <p class="text text-white">Contact us 24 hours a day</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   </section> 
<!-- staic media end -->
<!-- blog-section start -->
 <section class="blog-section theme1 pb-65"> -->
 <div class="container">
   <div class="row">
       <div class="col-12">
           <div class="section-title text-center mb-30">
               <h2 class="title text-dark text-capitalize">Latest Blogs</h2>
               <p class="text mt-10">Present posts in a best way to highlight interesting moments of your blog.
               </p>
           </div>
       </div>
   </div>
   <div class="row">
       <div class="col-12">
           <div class="blog-init slick-nav">
               <div class="slider-item">
                   <div class="single-blog">
                       <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
                           href="blog-grid-left-sidebar.html">
                           <img src="front/assets/img/blog-post/1.jpg" alt="blog-thumb-naile">
                       </a>
                       <div class="blog-post-content">
                           <a class="blog-link theme-color d-inline-block mb-10 text-uppercase"
                               href="https://themeforest.net/user/hastech">Fashion</a>
                           <h3 class="title text-capitalize mb-15"><a href="single-blog.html">This is first
                                   Post For XipBlog</a></h3>
                           <h5 class="sub-title"> Posted by <a class="blog-link theme-color d-inline-block mx-1"
                                   href="https://themeforest.net/user/hastech">HasTech</a>31TH Aug 2020</h5>
   
                       </div>
                   </div>
               </div>
<!-- slider-item end -->
  <div class="slider-item">
   <div class="single-blog">
       <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
           href="blog-grid-left-sidebar.html">
           <img src="front/assets/img/blog-post/2.jpg" alt="blog-thumb-naile">
       </a>
       <div class="blog-post-content">
           <a class="blog-link theme-color d-inline-block mb-10 text-uppercase"
               href="https://themeforest.net/user/hastech">Fashion</a>
           <h3 class="title text-capitalize mb-15"><a href="single-blog.html">This is Secound
                   Post For XipBlog</a></h3>
           <h5 class="sub-title"> Posted by <a class="blog-link theme-color d-inline-block mx-1"
                   href="https://themeforest.net/user/hastech">HasTech</a>31TH Aug 2020</h5>
   
       </div>
   </div>
   </div> -->
<!-- slider-item end -->
 <div class="slider-item">
   <div class="single-blog">
       <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
           href="blog-grid-left-sidebar.html">
           <img src="front/assets/img/blog-post/3.jpg" alt="blog-thumb-naile">
       </a>
       <div class="blog-post-content">
           <a class="blog-link theme-color d-inline-block mb-10 text-uppercase"
               href="https://themeforest.net/user/hastech">Fashion</a>
           <h3 class="title text-capitalize mb-15"><a href="single-blog.html">This is third
                   Post For XipBlog</a></h3>
           <h5 class="sub-title"> Posted by <a class="blog-link theme-color d-inline-block mx-1"
                   href="https://themeforest.net/user/hastech">HasTech</a>31TH Aug 2020</h5>
   
       </div>
   </div>
   </div>
<!-- slider-item end -->
 <div class="slider-item">
   <div class="single-blog">
       <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
           href="blog-grid-left-sidebar.html">
           <img src="front/assets/img/blog-post/4.jpg" alt="blog-thumb-naile">
       </a>
       <div class="blog-post-content">
           <a class="blog-link theme-color d-inline-block mb-10 text-uppercase"
               href="https://themeforest.net/user/hastech">Fashion</a>
           <h3 class="title text-capitalize mb-15"><a href="single-blog.html">This is fourth
                   Post For XipBlog</a></h3>
           <h5 class="sub-title"> Posted by <a class="blog-link theme-color d-inline-block mx-1"
                   href="https://themeforest.net/user/hastech">HasTech</a>31TH Aug 2020</h5>
   
       </div>
   </div>
   </div> 
<!-- slider-item end -->
 <div class="slider-item">
   <div class="single-blog">
       <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
           href="blog-grid-left-sidebar.html">
           <img src="front/assets/img/blog-post/1.jpg" alt="blog-thumb-naile">
       </a>
       <div class="blog-post-content">
           <a class="blog-link theme-color d-inline-block mb-10 text-uppercase"
               href="https://themeforest.net/user/hastech">Fashion</a>
           <h3 class="title text-capitalize mb-15"><a href="single-blog.html">This is fiveth
                   Post For XipBlog</a></h3>
           <h5 class="sub-title"> Posted by <a class="blog-link theme-color d-inline-block mx-1"
                   href="https://themeforest.net/user/hastech">HasTech</a>31TH Aug 2020</h5>
   
       </div>
   </div>
   </div>
<!-- slider-item end -->
  </div>
   </div>
   </div>
   </div>
   </section> 
<!-- blog-section end -->
<!-- brand slider start -->
 <div class="brand-slider-section theme1 bg-white">
    <div class="container">
   <div class="row">
       <div class="col-12">
           <div class="brand-init border-top py-35 slick-nav-brand">
               <div class="slider-item">
                   <div class="single-brand">
                       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                           <img src="front/assets/img/brand/1.jpg" alt="brand-thumb-nail">
                       </a>
                   </div>
               </div> -->
<!-- slider-item end -->
  <div class="slider-item">
   <div class="single-brand">
       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
           <img src="front/assets/img/brand/2.jpg" alt="brand-thumb-nail">
       </a>
   </div>
   </div>
<!-- slider-item end -->
  <div class="slider-item">
   <div class="single-brand">
       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
           <img src="front/assets/img/brand/3.jpg" alt="brand-thumb-nail">
       </a>
   </div>
   </div> 
<!-- slider-item end -->
<div class="slider-item">
   <div class="single-brand">
       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
           <img src="front/assets/img/brand/4.jpg" alt="brand-thumb-nail">
       </a>
   </div>
   </div>
<!-- slider-item end -->
 <div class="slider-item">
   <div class="single-brand">
       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
           <img src="front/assets/img/brand/5.jpg" alt="brand-thumb-nail">
       </a>
   </div>
   </div>
<!-- slider-item end -->
 <div class="slider-item">
   <div class="single-brand">
       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
           <img src="front/assets/img/brand/2.jpg" alt="brand-thumb-nail">
       </a>
   </div>
   </div>
<!-- slider-item end -->
  <div class="slider-item">
   <div class="single-brand">
       <a href="https://themeforest.net/user/hastech" class="brand-thumb">
           <img src="front/assets/img/brand/3.jpg" alt="brand-thumb-nail">
       </a>
   </div>
   </div>
<!-- slider-item end -->
</div>
   </div>
   </div>
   </div>
   </div>
<!-- brand slider end -->
<!-- Whatsapp icon starts -->
@endsection