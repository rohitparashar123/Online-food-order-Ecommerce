@extends('admin/master')
@section('page_title','view Banner')
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
      <div class="row mb-2">
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container table-responsive py-5">
   <div class="col-md-10 table_position">
   <table class="table table-bordered table-hover">
      <thead class="thead-dark">
         <tr>
            <th scope="col">Title</th>
            <th scope="col">Url</th>
            <th scope="col">Image</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>{{$data->title}}</td>
            <td>{{$data->url}}</td>
            <td><img src="{{ url('/upload/'.$data->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
         </tr>
      </tbody>
   </table>
</div>
</div>
@endsection