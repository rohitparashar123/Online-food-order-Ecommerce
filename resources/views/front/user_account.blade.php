@extends('front/master')
@section('title','User Account')
@section('content')
<?php use App\OrderProduct; ?>
<?php use App\Product; ?>
<?php use App\Order; ?>
<style type="text/css">
    .label_text{
  color: #1d1d1d; 
  font-weight: 600;
}
 .eye_position{
    position: relative;
    top: -32px;
    left: 875px!important;
    color: black;
}
</style>
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">my account</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">my account</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->

<div class="my-account pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title text-capitalize mb-30 pb-25">my account</h3>
            </div>
            <!-- My Account Tab Menu Start -->
            <div class="col-lg-3 col-12 mb-30">
                <div class="myaccount-tab-menu nav" role="tablist">
                    <a href="#dashboad" data-toggle="tab" ><i class="fas fa-tachometer-alt"></i>
                        Dashboard</a>

                    <a href="#orders" data-toggle="tab" class="active"><i class="fa fa-cart-arrow-down"></i>
                        Orders</a>

                    <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
                        Details</a>

                    
                </div>
            </div>
            <!-- My Account Tab Menu End -->

            <!-- My Account Tab Content Start -->
            <div class="col-lg-9 col-12 mb-30">
                <div class="tab-content" id="myaccountContent">
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade " id="dashboad" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Dashboard</h3>

                            <div class="welcome mb-20">
                                <p>Hello, <strong>{{ Auth::user()->name }}</strong></p>
                            </div>

                            <p class="mb-0">From your account dashboard. you can easily check &amp; view your
                                recent orders, manage your shipping and billing addresses and edit your
                                password and account details.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade active show" id="orders" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Orders</h3>

                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>   
                                            <th>Total Price</th>
                                            <th>Payment Method</th>
                                            <th>Order Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   @foreach($data as $list)
                                   <tbody>
                   <tr>
                    <td>{{$list['id']}}</td>
                    <td>
                        {{$list['name']}}
                    </td>
                    <td>{{$list['grand_total']}}</td>
                     <td>{{$list['payment_method']}}</td>
                    <td>{{date('d-m-Y',strtotime($list['created_at'])) }}</td>
                    <td><a href="{{url('orders/'.$list['id'])}}" class="btn btn-info">View Orders</a></td>
                  </tr>
                  </tbody>
                  @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    
                   

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Billing Address</h3>
                               
                                 <address>
                                <p><strong>Alex Tuntuni</strong></p>
                                <p>1355 Market St, Suite 900 <br>
                                    San Francisco, CA 94103</p>
                                <p>Mobile: (123) 456-7890</p>
                            </address>

                            <a href="#" class="ht-btn black-btn d-inline-block edit-address-btn"><i
                                    class="fa fa-edit"></i>Edit Address</a>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Account Details</h3>
                             <form action="{{url('/change-password')}}" method="post">
                                      @csrf 
                            <div class="account-details-form">
                                    <div class="row"> 
                                     
                                        <div class="col-lg-6 col-12 mb-30">
                                            <label class="mb-2 label_text">Full Name</label>
                                            <input id="display-name" placeholder="Full Name" type="text" value="{{Auth::user()->name}}" readonly="">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                             <label class="mb-2 label_text">Email Address</label>
                                            <input id="email" placeholder="Email Address" type="email" value="{{Auth::user()->email}}" readonly="">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <h4>Password change</h4>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="new-pwd" name="new_password" type="password" placeholder="New Password">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="confirm-pwd" name="new_confirm_password" type="password" placeholder="Confirm Password">
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn theme-btn--dark1 btn--md">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                </div>
            </div>
            <!-- My Account Tab Content End -->
        </div>
    </div>
</div>
<!-- product tab end -->
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
@endsection