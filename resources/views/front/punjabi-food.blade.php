@extends('front/master')
@section('title','Punjabi-Food | FoodBuddy')
@section('content')
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">Bags & Shoes</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bags &amp; Shoes</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="product-tab bg-white pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mb-30">
                <div class="grid-nav-wraper bg-lighten2 mb-30">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                            <nav class="shop-grid-nav">
                                <ul class="nav nav-pills align-items-center" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                            role="tab" aria-controls="pills-home" aria-selected="true">
                                            <i class="fa fa-th"></i>

                                        </a>
                                    </li>
                                    <li class="nav-item mr-0">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                            href="#pills-profile" role="tab" aria-controls="pills-profile"
                                            aria-selected="false"><i class="fa fa-list"></i></a>
                                    </li>
                                    <li> <span class="total-products text-capitalize">There are 13 products.</span></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-12 col-md-6 position-relative">
                            <div class="shop-grid-button d-flex align-items-center">
                                <span class="sort-by">Sort by:</span>
                                <button class="btn-dropdown rounded d-flex justify-content-between" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Relevance <span class="ion-android-arrow-dropdown"></span>
                                </button>
                                <div class="dropdown-menu shop-grid-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Relevance</a>
                                    <a class="dropdown-item" href="#"> Name, A to Z</a>
                                    <a class="dropdown-item" href="#"> Name, Z to A</a>
                                    <a class="dropdown-item" href="#"> Price, low to high</a>
                                    <a class="dropdown-item" href="#"> Price, high to low</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-tab-nav end -->
                <div class="tab-content" id="pills-tabContent">
                    <!-- first tab-pane -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row grid-view theme1">
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/product/1.jpg" alt="thumbnail">
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
                                        <div class="product-desc py-0">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-success top-left">-10%</span>
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/product/6.jpg" alt="thumbnail">
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
                                        <div class="product-desc py-0">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                    Running Arishi trainers in triple</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"><del class="del">$23.90</del>
                                                    <span class="onsale">$21.51</span></h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/product/2.jpg" alt="thumbnail">
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
                                        <div class="product-desc py-0">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                    Fresh Foam Kaymin from new zeland</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/product/7.jpg" alt="thumbnail">
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
                                        <div class="product-desc py-0">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                    Running Fuel Cell trainers</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/product/3.jpg" alt="thumbnail">
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
                                        <div class="product-desc py-0">
                                            <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                    Couture
                                                    Tricot Logo Stripe Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"> $21.51</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/product/8.jpg" alt="thumbnail">
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
                                        <div class="product-desc py-0">
                                            <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                                    Kaval
                                                    Windbreaker Winter Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/product/4.jpg" alt="thumbnail">
                                                <img class="second-img" src="front/assets/img/product/12.jpg" alt="thumbnail">
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
                                        <div class="product-desc py-0">
                                            <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                    Couture
                                                    Tricot Logo Stripe Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"><del class="del">$23.90</del>
                                                    <span class="onsale">$21.51</span></h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/product/9.jpg" alt="thumbnail">
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
                                        <div class="product-desc py-0">
                                            <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                                    Kaval
                                                    Windbreaker Winter Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/product/5.jpg" alt="thumbnail">
                                                <img class="second-img" src="front/assets/img/product/12.jpg" alt="thumbnail">
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
                                        <div class="product-desc py-0">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's
                                                    Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/product/12.jpg" alt="thumbnail">
                                                <img class="second-img" src="front/assets/img/product/5.jpg" alt="thumbnail">
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
                                        <div class="product-desc py-0">
                                            <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                                    Kaval
                                                    Windbreaker Winter Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/product/10.jpg" alt="thumbnail">
                                                <img class="second-img" src="front/assets/img/product/8.jpg" alt="thumbnail">
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
                                        <div class="product-desc py-0">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's
                                                    Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price"><del class="del">$23.90</del>
                                                    <span class="onsale">$21.51</span></h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-thumbnail position-relative">
                                            <span class="badge badge-danger top-right">New</span>
                                            <a href="single-product.html">
                                                <img class="first-img" src="front/assets/img/product/11.jpg" alt="thumbnail">
                                                <img class="second-img" src="front/assets/img/product/5.jpg" alt="thumbnail">
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
                                        <div class="product-desc py-0">
                                            <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                                    Kaval
                                                    Windbreaker Winter Jacket</a></h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="product-price">$11.90</h6>
                                                <button class="pro-btn" data-toggle="modal"
                                                    data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                        </div>
                    </div>
                    <!-- second tab-pane -->
                    <div class="tab-pane fade " id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="row grid-view-list theme1">
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/1.jpg"
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
                                            <div class="media-body pl-30">
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                            Men's Slim Fit Shirt Short Sleeve...</a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price">$11.90</h6>
                                                </div>
                                                <ul class="product-list-des">
                                                    <li>
                                                        Block out the haters with the fresh adidas® Originals Kaval
                                                        Windbreaker
                                                        Jacket.
                                                    </li>
                                                    <li>
                                                        Part of the Kaval Collection.
                                                    </li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for any
                                                        activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven jacket specifically constructed for freedom of
                                                        movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-success top-left">-10%</span>
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/6.jpg"
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
                                            <div class="media-body pl-30">
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                            Running Arishi trainers in triple</a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price"><del class="del">$23.90</del>
                                                        <span class="onsale">$21.51</span></h6>
                                                </div>

                                                <ul class="product-list-des">
                                                    <li>
                                                        Block out the haters with the fresh adidas® Originals Kaval
                                                        Windbreaker
                                                        Jacket.
                                                    </li>
                                                    <li>
                                                        Part of the Kaval Collection.
                                                    </li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for any
                                                        activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven jacket specifically constructed for freedom of
                                                        movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/2.jpg"
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
                                            <div class="media-body pl-30">
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                            Fresh Foam Kaymin from new zeland</a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price">$11.90</h6>

                                                </div>
                                                <ul class="product-list-des">
                                                    <li>
                                                        Block out the haters with the fresh adidas® Originals Kaval
                                                        Windbreaker
                                                        Jacket.
                                                    </li>
                                                    <li>
                                                        Part of the Kaval Collection.
                                                    </li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for any
                                                        activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven jacket specifically constructed for freedom of
                                                        movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/7.jpg"
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
                                            <div class="media-body pl-30">
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                            Running Fuel Cell trainers</a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price">$11.90</h6>

                                                </div>
                                                <ul class="product-list-des">
                                                    <li>
                                                        Block out the haters with the fresh adidas® Originals Kaval
                                                        Windbreaker
                                                        Jacket.
                                                    </li>
                                                    <li>
                                                        Part of the Kaval Collection.
                                                    </li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for any
                                                        activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven jacket specifically constructed for freedom of
                                                        movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/3.jpg"
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
                                            <div class="media-body pl-30">
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                            Couture
                                                            Tricot Logo Stripe Jacket</a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price"> $21.51</h6>

                                                </div>
                                                <ul class="product-list-des">
                                                    <li>
                                                        Block out the haters with the fresh adidas® Originals Kaval
                                                        Windbreaker
                                                        Jacket.
                                                    </li>
                                                    <li>
                                                        Part of the Kaval Collection.
                                                    </li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for any
                                                        activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven jacket specifically constructed for freedom of
                                                        movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/8.jpg"
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
                                            <div class="media-body pl-30">
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                                            Kaval
                                                            Windbreaker Winter Jacket</a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price">$11.90</h6>

                                                </div>
                                                <ul class="product-list-des">
                                                    <li>
                                                        Block out the haters with the fresh adidas® Originals Kaval
                                                        Windbreaker
                                                        Jacket.
                                                    </li>
                                                    <li>
                                                        Part of the Kaval Collection.
                                                    </li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for any
                                                        activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven jacket specifically constructed for freedom of
                                                        movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/4.jpg"
                                                        alt="thumbnail">
                                                    <img class="second-img" src="front/assets/img/product/12.jpg"
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
                                            <div class="media-body pl-30">
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                            Couture
                                                            Tricot Logo Stripe Jacket</a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price"><del class="del">$23.90</del>
                                                        <span class="onsale">$21.51</span></h6>

                                                </div>
                                                <ul class="product-list-des">
                                                    <li>
                                                        Block out the haters with the fresh adidas® Originals Kaval
                                                        Windbreaker
                                                        Jacket.
                                                    </li>
                                                    <li>
                                                        Part of the Kaval Collection.
                                                    </li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for any
                                                        activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven jacket specifically constructed for freedom of
                                                        movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/9.jpg"
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
                                            <div class="media-body pl-30">
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                                            Kaval
                                                            Windbreaker Winter Jacket</a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price">$11.90</h6>

                                                </div>
                                                <ul class="product-list-des">
                                                    <li>
                                                        Block out the haters with the fresh adidas® Originals Kaval
                                                        Windbreaker
                                                        Jacket.
                                                    </li>
                                                    <li>
                                                        Part of the Kaval Collection.
                                                    </li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for any
                                                        activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven jacket specifically constructed for freedom of
                                                        movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/5.jpg"
                                                        alt="thumbnail">
                                                    <img class="second-img" src="front/assets/img/product/12.jpg"
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
                                            <div class="media-body pl-30">
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                            Men's
                                                            Slim Fit Shirt Short Sleeve...</a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price">$11.90</h6>

                                                </div>
                                                <ul class="product-list-des">
                                                    <li>
                                                        Block out the haters with the fresh adidas® Originals Kaval
                                                        Windbreaker
                                                        Jacket.
                                                    </li>
                                                    <li>
                                                        Part of the Kaval Collection.
                                                    </li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for any
                                                        activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven jacket specifically constructed for freedom of
                                                        movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/12.jpg"
                                                        alt="thumbnail">
                                                    <img class="second-img" src="front/assets/img/product/5.jpg"
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
                                            <div class="media-body pl-30">
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                                            Kaval
                                                            Windbreaker Winter Jacket</a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price">$11.90</h6>

                                                </div>
                                                <ul class="product-list-des">
                                                    <li>
                                                        Block out the haters with the fresh adidas® Originals Kaval
                                                        Windbreaker
                                                        Jacket.
                                                    </li>
                                                    <li>
                                                        Part of the Kaval Collection.
                                                    </li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for any
                                                        activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven jacket specifically constructed for freedom of
                                                        movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/10.jpg"
                                                        alt="thumbnail">
                                                    <img class="second-img" src="front/assets/img/product/8.jpg"
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
                                            <div class="media-body pl-30">
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                            Men's
                                                            Slim Fit Shirt Short Sleeve...</a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price"><del class="del">$23.90</del>
                                                        <span class="onsale">$21.51</span></h6>

                                                </div>
                                                <ul class="product-list-des">
                                                    <li>
                                                        Block out the haters with the fresh adidas® Originals Kaval
                                                        Windbreaker
                                                        Jacket.
                                                    </li>
                                                    <li>
                                                        Part of the Kaval Collection.
                                                    </li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for any
                                                        activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven jacket specifically constructed for freedom of
                                                        movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img class="first-img" src="front/assets/img/product/11.jpg"
                                                        alt="thumbnail">
                                                    <img class="second-img" src="front/assets/img/product/5.jpg"
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
                                            <div class="media-body pl-30">
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                                            Kaval
                                                            Windbreaker Winter Jacket</a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price">$11.90</h6>

                                                </div>
                                                <ul class="product-list-des">
                                                    <li>
                                                        Block out the haters with the fresh adidas® Originals Kaval
                                                        Windbreaker
                                                        div Jacket.
                                                    </li>
                                                    <li>
                                                        Part of the Kaval Collection.
                                                    </li>
                                                    <li>
                                                        Regular fit is eased, but not sloppy, and perfect for any
                                                        activity.
                                                    </li>
                                                    <li>
                                                        Plain-woven jacket specifically constructed for freedom of
                                                        movement.
                                                    </li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>1200 In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav class="pagination-section mt-30">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-30 order-lg-first">
                <aside class="left-sidebar theme1">
                    <!-- search-filter start -->
                    <div class="search-filter">
                        <div class="check-box-inner pt-0">
                            <h4 class="title">Bags &amp; Shoes</h4>
                        </div>

                    </div>

                    <ul id="offcanvas-menu2" class="blog-ctry-menu">
                        <li><a href="javascript:void(0)">Shoes</a>
                            <ul class="category-sub-menu">
                                <li><a href="#">Women Shoes</a></li>
                                <li><a href="#">Men Shoes</a></li>
                                <li><a href="#">Boots</a></li>
                                <li><a href="#">Casual Shoes</a></li>
                                <li><a href="#">Flip Flops</a></li>
                            </ul>

                        </li>
                        <li><a href="javascript:void(0)">Luggage &amp; Bags</a>
                            <ul class="category-sub-menu">
                                <li><a href="#">Stylish Backpacks</a></li>
                                <li><a href="#">Shoulder Bags</a></li>
                                <li><a href="#">Crossbody Bags</a></li>
                                <li><a href="#">Briefcases</a></li>
                                <li><a href="#">Luggage &amp; Travel</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Accessories</a>
                            <ul class="category-sub-menu">
                                <li><a href="#">Cosmetic Bags &amp; Cases</a></li>
                                <li><a href="#">Wallets &amp; Card Holders</a></li>
                                <li><a href="#">Luggage Covers</a></li>
                                <li><a href="#">Passport Covers</a></li>
                                <li><a href="#">Bag Parts &amp; Accessories</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="search-filter">
                        <form action="#">
                            <div class="check-box-inner mt-10">
                                <h4 class="title">Filter By</h4>
                                <h4 class="sub-title pt-10">Categories</h4>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="20820">
                                    <label for="20820">Digital Cameras <span>(13)</span></label>
                                </div>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="20821">
                                    <label for="20821">Camcorders <span>(13)</span></label>
                                </div>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="20822">
                                    <label for="20822">Camera Drones<span>(13)</span></label>
                                </div>
                            </div>
                            <!-- check-box-inner -->
                            <div class="check-box-inner mt-10">
                                <h4 class="sub-title">Price</h4>
                                <div class="price-filter mt-10">
                                    <div class="price-slider-amount">
                                        <input type="text" id="amount" name="price" readonly
                                            placeholder="Add Your Price" />
                                    </div>
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                            <div class="check-box-inner mt-10">
                                <h4 class="sub-title">Size</h4>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="test9">
                                    <label for="test9">s <span>(2)</span></label>
                                </div>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="test10">
                                    <label for="test10">m <span>(2)</span></label>
                                </div>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="test11">
                                    <label for="test11">l <span>(2)</span></label>
                                </div>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="test12">
                                    <label for="test12">xl <span>(2)</span></label>
                                </div>
                            </div>
                            <!-- check-box-inner -->
                            <div class="check-box-inner mt-10">
                                <h4 class="sub-title">color</h4>
                                <div class="filter-check-box color-grey">
                                    <input type="checkbox" id="20826">
                                    <label for="20826">grey <span>(4)</span></label>
                                </div>
                                <div class="filter-check-box color-white">
                                    <input type="checkbox" id="20827">
                                    <label for="20827">white <span>(3)</span></label>
                                </div>
                                <div class="filter-check-box color-black">
                                    <input type="checkbox" id="20828">
                                    <label for="20828">black <span>(6)</span></label>
                                </div>
                                <div class="filter-check-box color-camel">
                                    <input type="checkbox" id="20829">
                                    <label for="20829">camel <span>(2)</span></label>
                                </div>
                            </div>
                            <!-- check-box-inner -->
                            <div class="check-box-inner mt-10">
                                <h4 class="sub-title">Brand</h4>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="20824">
                                    <label for="20824">Graphic Corner<span>(5)</span></label>
                                </div>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="20825">
                                    <label for="20825">Studio Design<span>(8)</span></label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- search-filter end -->
                    <div class="product-widget mb-60 mt-30">
                        <h3 class="title">Product Tags</h3>
                        <ul class="product-tag d-flex flex-wrap">
                            <li><a href="#">shopping</a></li>
                            <li><a href="#">New products</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">sale</a></li>
                        </ul>
                    </div>
                    <!--second banner start-->
                    <div class="banner hover-animation position-relative overflow-hidden">
                        <a href="shop-grid-4-column.html" class="d-block">
                            <img src="front/assets/img/banner/2.jpg" alt="img">
                        </a>
                    </div>
                    <!--second banner end-->
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->
<!-- first modal -->
<div class="modal fade theme1 style1" id="quick-view" role="dialog">
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
<div class="modal fade style2" id="compare" role="dialog">
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
<div class="modal fade style3" id="add-to-cart" role="dialog">
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

@endsection