@extends('admin/master')
@section('page_title','Invoice')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FoodBuddy Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Order ID: #{{$lists['id']}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> FoodBuddy, Inc.
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <strong>Billed To:</strong>
                  <address>
                    <strong>{{$lists['name']}}</strong><br>
                    {{$lists['useremail']}}<br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <strong>Shipped To:</strong><br>
                  <address>
                    <strong>{{$lists['name']}}</strong><br>
                    {{$lists['address']}},
              {{$lists['city']}},
             {{$lists['state']}},
             {{$lists['pincode']}}<br>
             {{$lists['country']}}<br>
             {{$lists['phone']}}<br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b> <?php echo DNS1D::getBarcodeHTML($lists['id'], 'C39'); ?></b><br>
                  <b>Payment Method:</b>{{$lists['payment_method']}}<br>
                  Order Date: {{date('d-m-Y',strtotime($lists['created_at'])) }}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Product QR Code</th>
                      <th>Product Price</th>
                      <th>Product Quantity</th>
                      <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $subTotal=0; @endphp
                  @foreach($lists['order_products'] as $product)
                  <tr>
                    <td>
                     {{$product['product_name']}}<br><br>
                    </td>
                    <td> <?php echo DNS2D::getBarcodeHTML($product['product_quantity'], 'QRCODE',3,3); ?></td>
                    <td> Rs. {{$product['product_price']}}</td>
                    <td> {{$product['product_quantity']}}</td>
                    <td>Rs. {{$product['product_price']*$product['product_quantity']}}</td>
                  </tr>
                  @php $subTotal = $subTotal + ($product['product_price']*$product['product_quantity'])
                  @endphp
                  @endforeach  
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  {{$lists['payment_method']}}
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Order Date: {{date('d-m-Y',strtotime($lists['created_at'])) }}</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Sub Total:</th>
                        <td>Rs. {{$subTotal}}</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>Rs.0</td>
                      </tr>
                      <tr>
                        <th>Grand Total:</th>
                        <td>Rs. {{$lists['grand_total']}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <!-- this row will not appear when printing -->
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @endsection
