@extends('admin/master')
@section('page_title','Add Category')
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
               <a href="{{url('admin/category/manage_category')}}" class="btn btn-success">Manage Category</a>
              <br><br>
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Add Category</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{url('admin/category/add_category')}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Name</label>
                           <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                           @error('name')
                           <span class="alert alert-danger error">
                           {{$message}}
                           </span>
                           <br>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Description</label>
                           <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Enter Description">
                           @error('description')
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
                           <br>
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