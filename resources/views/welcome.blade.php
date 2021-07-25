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
                                                    style="height: 100%; width: 100%; "        alt="thumbnail">
                                                </a>
                                             
                                               

                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title"><a href="{{'productdetail/'.$products->id}}">
                                                        {{$products->product_name}}</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price"><span>Rs. </span> {{$products->product_price}}</h6>
                                                        
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

