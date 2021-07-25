@extends('front/master')
@section('content')
@foreach($products as $products)
<div class="slider-item">
                     <div class="product-list mb-30">
                                    <div class="card product-card">
                                        <div class="card-body p-0">
                                            <div class="media flex-column">
                                                <div class="product-thumbnail position-relative">
                                                    <span class="badge badge-danger top-right">New</span>
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{url('/upload'.$products->product_image)}}"
                                                            alt="thumbnail">
                                                    </a>
                                                    <!-- product links -->
                                                    <ul class="product-links d-flex justify-content-center">
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <span data-toggle="tooltip" data-placement="bottom"
                                                                    title="add to wishlist" class="icon-heart"> </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#compare">
                                                                <span data-toggle="tooltip" data-placement="bottom"
                                                                    title="Add to compare" class="icon-shuffle"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#quick-view">
                                                                <span data-toggle="tooltip" data-placement="bottom"
                                                                    title="Quick view" class="icon-magnifier"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!-- product links end-->
                                                </div>
                                                <div class="media-body">
                                                    <div class="product-desc">
                                                        <h3 class="title"><a href="shop-grid-4-column.html">{{products->product_name}}</a></h3>
                                                        <div class="star-rating">
                                                            <span class="ion-ios-star"></span>
                                                            <span class="ion-ios-star"></span>
                                                            <span class="ion-ios-star"></span>
                                                            <span class="ion-ios-star"></span>
                                                            <span class="ion-ios-star de-selected"></span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="product-price">${{products->product_price}}</h6>
                                                            <button class="pro-btn" data-toggle="modal"
                                                                data-target="#add-to-cart"><i
                                                                    class="icon-basket"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-list End -->
                                </div>
                                <div class="product-list">
                                    <div class="card product-card">
                                        <div class="card-body p-0">
                                            <div class="media flex-column">
                                                <div class="product-thumbnail position-relative">
                                                    <span class="badge badge-success top-left">-10%</span>
                                                    <span class="badge badge-danger top-right">New</span>
                                                    <a href="single-product.html">
                                                        <img class="first-img" src="{{url('/upload/'.$products->product_image)}}"
                                                            alt="thumbnail">
                                                    </a>
                                                    <!-- product links -->
                                                    <ul class="product-links d-flex justify-content-center">
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <span data-toggle="tooltip" data-placement="bottom"
                                                                    title="add to wishlist" class="icon-heart"> </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#compare">
                                                                <span data-toggle="tooltip" data-placement="bottom"
                                                                    title="Add to compare" class="icon-shuffle"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#quick-view">
                                                                <span data-toggle="tooltip" data-placement="bottom"
                                                                    title="Quick view" class="icon-magnifier"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!-- product links end-->
                                                </div>
                                                <div class="media-body">
                                                    <div class="product-desc">
                                                        <h3 class="title"><a href="shop-grid-4-column.html">{{$products->product_name}}</a></h3>
                                                        <div class="star-rating">
                                                            <span class="ion-ios-star"></span>
                                                            <span class="ion-ios-star"></span>
                                                            <span class="ion-ios-star"></span>
                                                            <span class="ion-ios-star"></span>
                                                            <span class="ion-ios-star de-selected"></span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="product-price"><del class="del">$23.90</del>
                                                                <span class="onsale">${{products->product_price}}</span></h6>
                                                            <button class="pro-btn" data-toggle="modal"
                                                                data-target="#add-to-cart"><i
                                                                    class="icon-basket"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-list End -->
                                </div>
                            </div>
                            @endforeach
                            <!-- slider-item end -->
@endsection