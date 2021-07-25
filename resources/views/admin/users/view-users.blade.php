@extends('admin/master')
@section('page_title','View Users')
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
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
            <!-- /.card-header -->
  
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Registered User's Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                   <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $list)
               <tr>
               <td>{{$list->id}}</td>
            <td>{{$list->name}}</td>
            <td>{{$list->email}}</td>
            <td>{{date('d-m-Y',strtotime($list['created_at'])) }}</td>
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