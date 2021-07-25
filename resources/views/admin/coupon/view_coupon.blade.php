@extends('admin/master')
@section('page_title','View Coupon')
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
  <a href="{{url('admin/manage_coupon')}}" class="btn btn-success" style="margin-left: 100px;">Back</a>
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
            <th scope="col">Coupon Code</th>
            <th scope="col">Amount</th>
            <th scope="col">Amount Type</th>
            <th scope="col">Expiry Date</th>
            
         </tr>
      </thead>
      <tbody>
        
         <tr>
             <td>{{$data->id}}</td>
            <td>{{$data->coupon_code}}</td>
            <td>{{$data->amount}}</td>
            <td>{{$data->amount_type}}</td>
            <td>{{$data->expiry_date}}</td>
            
         </tr>
         
      </tbody>
   </table>

   </div>
</div>
<!-- END DATA TABLE-->
@endsection