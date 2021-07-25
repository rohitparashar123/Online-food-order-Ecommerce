   @extends('front/master')
@section('title','User Account')
@section('content')
<?php use App\OrderProduct; ?>
<?php use App\Product; ?>
<?php use App\Order; ?>
<br>
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td>Date</td>
                      <td>{{date('d-m-Y',strtotime($userOrderDetails['created_at'])) }}</td>
                    </tr>
                    <tr>
                      <td>Grand Total</td>
                      <td>₹ {{$userOrderDetails['grand_total']}}</td>
                    </tr>
                    <tr>
                      <td>Coupon Code</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Coupon Amount</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Payment Method</td>
                      <td>{{$userOrderDetails['payment_method']}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
<br>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Delivery Address</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <tbody>
                   <tr>
                      <td>Name</td>
                      <td>{{$userOrderDetails['name'] }}</td>
                    </tr>
                    <tr>
                      <td>city</td>
                      <td>{{$userOrderDetails['city']}}</td>
                    </tr>
                    <tr>
                      <td>State</td>
                      <td>{{$userOrderDetails['state']}}</td>
                    </tr>
                    <tr>
                      <td>Country</td>
                      <td> {{$userOrderDetails['country']}} </td>
                    </tr>
                    <tr>
                      <td>Pincode</td>
                       <td>{{$userOrderDetails['pincode']}} </td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td>{{$userOrderDetails['address']}}</td>
                    </tr> 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Customer Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped"> 
                  <tbody>
                   <tr>
                      <td>Name</td>
                      <td>{{$userOrderDetails['name'] }}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>{{$userOrderDetails['useremail']}}</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           <br>  
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Product Name</th>
                      <th>Product Image</th>
                      <th>Product Price</th>
                      <th>Product Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($userOrderDetails['order_products'] as $list)
                   <tr>
                    <td>{{$list['order_id']}}</td>
                    <td>{{$list['product_name']}}</td>
                    <td><img src="{{ url('/upload/'.$list['product_image'])}}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
                    <td>₹ {{$list['product_price']}}</td>
                    <td>{{$list['product_quantity']}}</td>
                  </tr>
                  @endforeach
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   @endsection