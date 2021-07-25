@extends('front/master')
@section('title','Checkout')
@section('content')
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">check out</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">check out</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="check-out-section pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-30">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    1 Personal Information
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <form action="{{url('place_order')}}" method="post" class="personal-information">
                                    @csrf
                                   
                                    <div class="form-group row">
                                        <label for="firstname" class="col-md-3 col-form-label">Full
                                            name</label>
                                        <div class="col-md-6">
                                            <input type="text" id="firstname" class="form-control" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-6">
                                            <input type="email"  id="email" class="form-control" value="{{Auth::user()->email}}">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    2 Shipping Address
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="checkout-inner border-0">
                                    <div class="checkout-address p-0">
                                        <p>
                                            The selected address will be used both as your personal address (for
                                            invoice) and as your delivery address.
                                        </p>
                                    </div>
                                    <div class="check-out-content">
                                         <div class="form-group row">
                                                <label class="col-md-3" for="address1">Full Name</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" name="name" id="address1" 
                                                        type="text" required="">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-md-3" for="address1">Email</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" name="email" id="address1"
                                                        type="email" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="address1">Address</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" name="address" id="address1" name="address"
                                                        type="text" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="city">City</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" name="city" id="city" name="city" type="text"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">State</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" name="state">
                                                        <option>-- please choose --</option>
                                                        <option value="1">AA</option>
                                                        <option value="2">AE</option>
                                                        <option value="3">AP</option>
                                                        <option value="4">Alabama</option>
                                                        <option value="5">Alaska</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="zip">Zip/Postal Code</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="zip" type="text" required="" name="pincode">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">Country</label>
                                                <div class="col-md-6">
                                                        <select name="country" id="country" class="form-control">
                                                        <option>-- please choose --</option>
                                                         @foreach ($countries as $country)
                                                         <option value="{{ $country }}">{{ $country }}</option>
                                                         @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3" for="phone">Phone</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="phone" type="text" required="" name="phone">
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="optional">
                                                        Optional
                                                    </span>
                                                </div>
                                            </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>4</span> Payment
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body pt-0">
                               
                                <div class="custom-radio mb-4">
                                    <input type="radio" id="credit" name="payment_method" value="Cash on delivery" class="cod">
                                    <label for="credit">Pay by Cash on Delivery</label>
                                </div>
                                <div class="custom-radio mb-4">
                                     <input type="radio" id="debit" name="payment_method" value="paytm" class="paytm">
                                    <label for="debit">Paytm</label>
                                </div>
                                 <div class="custom-radio mb-4">
                                     <input type="radio" id="test7" name="payment_method" value="googlepay" class="paypal">
                                    <label><a href="/payment">Google Pay</a></label>
                                </div>
                                 <div class="custom-radio mb-4">
                                     <input type="radio" id="test7" name="payment_method" value="razorpay" class="razorpay">
                                    <label><a href="/payment">Razorpay</a></label>
                                </div>
                                <div class="filter-check-box mb-4">
                                    <input type="checkbox" id="20828" required="">
                                    <label class="checkout" for="20828">I agree to the terms and Conditions</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <ul class="list-group cart-summary rounded-0">
                    <?php
                    $total_amount=0;
                    ?>
                    @foreach($a as $carts)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <ul class="items">
                            <li>{{$carts->product_name}}</li>
                             <li>Quantity</li>
                        </ul>
                        <ul class="amount">
                            <li>{{$carts->product_price}}</li>
                            <li>{{$carts->product_quantity}}</li>
                        </ul>
                    </li>
                    <?php
                    $total_amount=$total_amount+($carts->product_price*$carts->product_quantity);
                    ?>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <ul class="items">
                            <li>Coupon Discount</li>
                            <li>Taxes</li>
                             <li>Total (tax excl.)</li>
                        </ul>
                        <ul class="amount">
                            <input type="hidden" name="grand_total" value="<?php echo $total_amount ?>">
                            <li>
                                @if(!empty(Session::get('couponAmount')))
                                Rs. {{Session::get('couponAmount')}}
                                @else
                                Rs. 0
                                @endif
                            </li>
                            <li>$0</li>
                            <li>
                                @if(!empty(Session::get('couponAmount')))
                                <li><?php echo $total_amount - Session::get('couponAmount'); ?></li>
                                @else
                                <li><?php echo $total_amount; ?></li>
                                @endif
                            </li>
                        </ul>
                    </li>

                   <li class="list-group-item text-center">
                        @if(Auth::check())
                        <?php if($total_amount==0) { ?>
                        <input  class="btn theme-btn--dark1 btn--md" onclick="return checkout_method()" value="Place Order" readonly>
                        <?php } else{ ?>
                         <input type="submit" class="btn theme-btn--dark1 btn--md" onclick="return select_payment_method()" value="Place Order">
                        <?php } ?>
                        @endif
                    </li>
                    </form>
                </ul>
                
               <!--  <div class="delivery-info mt-20">
                    <ul>
                        <li>
                            <img src="assets/img/icon/10.png" alt="icon"> Security policy (edit with Customer
                            reassurance module)
                        </li>
                        <li>
                            <img src="assets/img/icon/11.png" alt="icon"> Delivery policy (edit with Customer
                            reassurance module)
                        </li>
                        <li class="mb-0">
                            <img src="assets/img/icon/12.png" alt="icon"> Return policy (edit with Customer
                            reassurance module)
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->

@endsection


  