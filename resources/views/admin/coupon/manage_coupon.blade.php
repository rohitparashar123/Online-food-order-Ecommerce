@extends('admin/master')
@section('page_title','Manage Coupon')
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
  <a href="{{url('admin/coupon')}}" class="btn btn-success" style="margin-left: 100px;">Back</a>
 <br> <br>
</div>
<!-- /.content-header -->
 <span class="bg-success" style="color: white;">
               @if(session('message'))
               <p class="alert alert-success alert-dismissible fade show" role="alert" style="margin-left: 105px; width: 81%;">
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
            <th scope="col">Coupon Code</th>
            <th scope="col">Amount</th>
            <th scope="col">Amount Type</th>
            <th scope="col">Expiry Date</th>
            <th scope="col">Action</th>
         </tr>
      </thead>
      <tbody>
         @foreach($data as $list)
         <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->coupon_code}}</td>
            <td>{{$list->amount}}</td>
            <td>{{$list->amount_type}}</td>
            <td>{{$list->expiry_date}}</td>
            <td>
               <a href="{{url('manage_coupon/view/')}}/{{$list->id}}" class="btn btn-primary">View</a>
               <a href="{{url('manage_coupon/edit/')}}/{{$list->id}}" class="btn btn-success">Edit</a>
               <a href="{{url('manage_coupon/delete/')}}/{{$list->id}}" class="btn btn-danger">Delete</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>

   </div>
</div>
<!-- END DATA TABLE-->
@endsection