@extends('admin/master')
@section('page_title','Orders')
@section('content')
   <!-- Content Header (Page header) -->
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
            <!-- /.card-header -->
  
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Ordered Date</th>
                  <th>Name</th>
                  <th>Customer Email</th>
                  <th>Product Code</th>
                  <th>Grand Total</th>
                  <th>Payment Method</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Orders as $list)
               <tr>
               <td>{{$list['id']}}</td>
               <td>{{date('d-m-Y',strtotime($list['created_at'])) }}</td>
              <td>{{$list['name']}}</td>
              <td>{{$list['useremail']}}</td>
              <td>{{$list['order_id']}}</td>
              <td>₹ {{$list['grand_total']}}</td>
              <td>{{$list['payment_method']}}</td>
            
            <td>
               
               <a href="{{url('/orders/view-orders/'.$list['id'])}}" class="btn btn-info mt-2"><i class="fas fa-file"></i></a>   
               <a href="{{url('/orders/invoice/'.$list['id'])}}" class="btn btn-info mt-2"><i class="fas fa-receipt"></i></a> 
               <a href="{{url('/invoice-print/'.$list['id'])}}" class="btn btn-danger mt-1"><i class="far fa-file-pdf"></i></a>
            </td>
         </tr>
         @endforeach
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
    </section>
    <!-- /.content -->
   
@endsection