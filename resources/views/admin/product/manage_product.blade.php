@extends('admin/master')
@section('page_title','Manage Product')
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
  <a href="{{url('admin/product')}}" class="btn btn-success" style="margin-left: 100px;">Back</a>
 <br> <br>
</div>
<!-- /.content-header -->
 <span class="bg-success" style="color: white;">
               <br>
               @if(session('message'))
               <p class="alert alert-success alert-dismissible fade show" role="alert"  style="margin-left: 105px; width: 81%;">
                  {{session('message')}}
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
               </button>
               </p>
               @endif
              </span>

<div class="container table-responsive py-5" style="margin-top: -60px;">
   <div class="col-md-10 table_position">
   <table class="table table-bordered table-hover">
      <thead class="thead-dark">
         <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Code</th>
            <th scope="col">Product Category</th>
            <th scope="col">Product Description</th>
            <th scope="col">Product Image</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Quantity </th>
            <th scope="col">Action</th>
         </tr>
      </thead>
      <tbody>
         @foreach($data as $list)
         <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->product_name}}</td>
            <td>{{$list->product_code}}</td>
            <td>{{$list->category_id}}</td>
            <td>{!!$list->product_description!!}</td>
            <td><img src="{{ url('/upload/'.$list->product_image)}}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
            <td>{{$list->product_price}}</td>
            <td>{{$list->product_quantity}}</td>
            <td>
               <a href="{{url('manage_product/view/')}}/{{$list->id}}" class="btn btn-primary">View</a>
               <a href="{{url('manage_product/edit/')}}/{{$list->id}}" class="btn btn-success">Edit</a>
               <a href="{{url('manage_product/delete/')}}/{{$list->id}}" class="btn btn-danger">Delete</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   </div>
</div>
<!-- END DATA TABLE-->
@endsection