@extends('admin/master')
@section('page_title','Edit Banner')
@section('content')
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
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <a href="{{url('admin/manage_banner')}}" class="btn btn-success">Manage Banner</a>
              <br>
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
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Update Bannner</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{url('manage_banner/update')}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Title</label>
                           <input type="hidden" name="id" value="{{$data->id}}">
                           <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter the Title" value="{{$data->title}}">
                           @error('title')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Url</label>
                           <input type="url" name="url" class="form-control" id="exampleInputPassword1" placeholder="Enter Url" value="{{$data->url}}">
                           @error('url')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputFile">Image</label>
                           <br>
                            <td><img src="{{ url('/upload/'.$data->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" name="image" class="custom-file-input" value="{{$data->image}}"  >
                                 <label class="custom-file-label">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                           <button type="submit" class="btn btn-primary">Submit</button>
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