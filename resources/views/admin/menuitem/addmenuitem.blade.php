@extends('admin/master')
@section('page_title','Add Navigation Menu')
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
               <a href="{{url('admin/menu-item/manage_menu-item')}}" class="btn btn-success">Manage Nav-Menu</a>
              <br><br>
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Add Navigation Menu</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{url('admin/menu-item')}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Menu Name</label>
                           <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Menu Name">
                           @error('name')
                           <span class="alert alert-danger error">
                           {{$message}}
                           </span>
                           <br>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Status</label>
                           <select class="form-control" name="status" required>
                              <option>Enabled</option>
                              <option>Disabled</option>
                           </select>
                            @error('status')
                           <span class="alert alert-danger error">
                           {{$message}}
                           </span>
                           <br>
                           @enderror
                           </div>
                        <div class="form-group">
                           <label for="exampleInputEmail1">Menu Link</label>
                           <input type="text" name="link" class="form-control" id="exampleInputEmail1" placeholder="Enter Menu Link">
                           @error('link')
                           <span class="alert alert-danger error">
                           {{$message}}
                           </span>
                           <br>
                           @enderror
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