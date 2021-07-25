@extends('admin/master')
@section('page_title','Edit Product')
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
                     <h3 class="card-title">Add Product</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{url('manage_product/update')}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           
                           <label for="exampleInputEmail1">Product Name</label>
                           <input type="hidden" name="id" value="{{$data->id}}">
                           <input type="text" name="product_name" value="{{$data->product_name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name">
                           @error('product_name')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Product Code</label>
                           <input type="text" name="product_code"  value="{{$data->product_code}}" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Code">
                           @error('product_code')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                           

                        <div class="form-group">
                           <label for="exampleInputPassword1">Product Category</label>
                           <select name="category_id" value="{{$data->category_id}}" type="text" class="form-control">
                             <!--  <option value="" selected disabled>Select the Category</option> -->
                              @foreach ($category as $a )
                        <option value="{{$a->id}}" {{$a->id==$data->category_id ? 'selected' : ''}} >{{$a->name}}</option> 
                        @endforeach
                           </select>
                        </div>

                           <div class="form-group">
                           <label for="exampleInputPassword1">Product Description</label>
                           <textarea class="form-control" type="text" id="summernote" name="product_description" placeholder="Enter Product Description">{{$data->product_description}}</textarea> 
                           
                           @error('product_description')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                           
                          
                        <div class="form-group">
                           <label for="exampleInputFile">Product Image</label>
                           <br>
                           <img src="{{ url('/upload/'.$data->product_image)}}" style="height: 150px; width: 150px; border-radius: 100%;">
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" name="product_image" class="custom-file-input"  value="{{$data->product_image}}"  >
                                 <label class="custom-file-label">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Product Price</label>
                           <input type="text"  value="{{$data->product_price}}" name="product_price" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Price">
                           @error('product_price')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Product Quantity</label>
                           <input type="text"  value="{{$data->product_quantity}}" name="product_quantity" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Quantity">
                           @error('product_quantity')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
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