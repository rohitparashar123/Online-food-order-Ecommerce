@extends('admin/master')
@section('page_title','Add Banner')
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
               <br>
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Add Bannner</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{url('/save')}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Title</label>
                           <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter the Title">
                           @error('title')
                           <span class="alert alert-danger error">
                           {{$message}}
                           </span>
                           <br>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Url</label>
                           <input type="url" name="url" class="form-control" id="exampleInputPassword1" placeholder="Enter Url">
                           @error('url')
                           <span class="alert alert-danger error">
                           {{$message}}
                           </span>
                           <br>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputFile">Image</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" name="image" class="custom-file-input"   >
                                 <label class="custom-file-label">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                          @error('image')
                           <span class="alert alert-danger error">
                           {{$message}}
                           </span>
                           @enderror
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