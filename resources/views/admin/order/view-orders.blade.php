@extends('admin/master')
@section('page_title','Orders')
@section('content')
<?php use App\OrderProduct; ?>
<?php use App\Product; ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order #{{$lists['id']}} Details</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
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
                      <td>{{date('d-m-Y',strtotime($lists['created_at'])) }}</td>
                    </tr>
                    <tr>
                      <td>Grand Total</td>
                      <td>₹ {{$lists['grand_total']}}</td>
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
                      <td>{{$lists['payment_method']}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

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
                      <td>{{$lists['name'] }}</td>
                    </tr>
                    <tr>
                      <td>city</td>
                      <td>{{$lists['city']}}</td>
                    </tr>
                    <tr>
                      <td>State</td>
                      <td>{{$lists['state']}}</td>
                    </tr>
                    <tr>
                      <td>Country</td>
                      <td> {{$lists['country']}} </td>
                    </tr>
                    <tr>
                      <td>Pincode</td>
                       <td>{{$lists['pincode']}} </td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td>{{$lists['address']}}</td>
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
                      <td>{{$userDetails['name'] }}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>{{$userDetails['email']}}</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Update Order Status</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <tbody>
                   <tr>
                      <td colspan=2>
                        <select class="form-control">
                          <option>Select Status</option>
                          <option>New</option>
                          <option>Pending</option>
                        </select><br>
                        <button class="btn btn-success col-sm-12" type="submit">Update</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
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
                    @foreach($lists['order_products'] as $list)
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