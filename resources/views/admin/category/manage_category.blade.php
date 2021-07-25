@extends('admin/master')
@section('page_title','Manage Category')
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
  <a href="{{url('admin/category/add_category')}}" class="btn btn-success" style="margin-left: 100px;">Back</a>
 <br> <br>
</div>
<!-- /.content-header -->
 <span class="bg-success" style="color: white;">
               <br>
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
            <th scope="col"> Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
         </tr>
      </thead>
      <tbody>
         @foreach($data as $list)
         <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->name}}</td>
            <td>{{$list->description}}</td>
            <td><img src="{{ url('/upload/'.$list->image)}}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
            <td>
               <a href="{{url('category/manage_category/view/')}}/{{$list->id}}" class="btn btn-primary">View</a>
               <a href="{{url('category/manage_category/edit/')}}/{{$list->id}}" class="btn btn-success">Edit</a>
               <a href="{{url('category/manage_category/delete/')}}/{{$list->id}}" class="btn btn-danger">Delete</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>

   </div>
</div>
<!-- END DATA TABLE-->
@endsection