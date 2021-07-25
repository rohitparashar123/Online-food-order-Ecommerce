@extends('admin/master')
@section('page_title','Edit Category')
@section('content')
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
    <span class="bg-success" style="color: white;">
               <br>
               @if(session('message'))
               <p class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('message')}}
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
               </button>
               </p>
               @endif
              </span>
   <!-- /.content-header -->
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <!-- general form elements -->
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Add Category</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{url('category/manage_category/update')}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Name</label>
                           <input type="hidden" name="id" value="{{$data->id}}">
                           <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="{{$data->name}}">
                           @error('name')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Description</label>
                           <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Enter Description" value="{{$data->description}}">
                           @error('description')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputFile">Image</label>
                           <br>
                           <img src="{{ url('/upload/'.$data->image) }}" style="height: 150px; width: 150px; border-radius: 100%;">
                           <br>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                 <label class="custom-file-label" for="exampleInputFile" value="{{$data->image}}">Choose file</label>
                                 <br>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                           <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                  </form>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<!-- /.card -->
@endsection