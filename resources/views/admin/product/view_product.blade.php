@extends('admin/master')
@section('page_title','View Product')
@section('content')
<style type="text/css">
   .table_position{
      position: relative;
      left: 90px;
   }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
   </div>
  <a href="{{url('admin/manage_product')}}" class="btn btn-success" style="margin-left: 100px;">Back</a>
 <br> <br>
</div>
<!-- /.content-header -->
@if(session('message'))
<p class ="alert alert-success" style="margin-left: 105px; width: 81%;">
   {{session('message')}}
</p>

@endif

<div class="container table-responsive py-5" style="margin-top: -60px;">
   <div class="col-md-10 table_position">
   <table class="table table-bordered table-hover">
      <thead class="thead-dark">
         <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Code</th>
            <th scope="col">Product Description</th>
            <th scope="col">Product Image</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Quantity </th>
            
         </tr>
      </thead>
      <tbody>
        
         <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->product_name}}</td>
            <td>{{$data->product_code}}</td>
            <td>{{$data->product_description}}</td>
            <td><img src="{{ url('/upload/'.$data->product_image)}}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
            <td>{{$data->product_price}}</td>
            <td>{{$data->product_quantity}}</td>
            
         </tr>
         
      </tbody>
   </table>

   </div>
</div>
<!-- END DATA TABLE-->
@endsection