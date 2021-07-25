@extends('admin/master')
@section('page_title','Edit Coupon')
@section('content')
<style type="text/css">
   .card:hover{
        box-shadow: 3px 3px 5px 3px #ccc;
        transition: box-shadow .2s ease-in; 
   }
</style>
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
            <div class="col-md-8" >
               
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
                     <h3 class="card-title">Update Coupon</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{url('manage_coupon/update')}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        
                        <div class="form-group">
                           <label for="exampleInputPassword1">Coupon Code</label>
                           <input type="hidden" name="id" value="{{$data->id}}">
                           <input type="text" name="coupon_code" class="form-control" id="exampleInputPassword1" placeholder="Enter Coupon Code" value="{{$data->coupon_code}}">
                           @error('coupon_code')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                           <div class="form-group">
                           <label for="exampleInputPassword1">Coupon Amount</label>
                           <input type="number" name="amount" class="form-control" id="exampleInputPassword1" placeholder="Enter the  Amount" value="{{$data->amount}}">
                           @error('amount')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                        <label>Amount Type</label>
                         <select name="amount_type" id="" class="form-control">
                           <option value="" disabled>Select the amount type</option>
                           <option value="percentage" @if($data->amount_type=='percentage') selected @endif>Percentage</option>
                           <option value="fixed" @if($data->amount_type=='fixed') selected @endif>Fixed</option>
                         </select>
                         </div>

                           <div class="form-group">
                           <label for="exampleInputPassword1">Expiry Date</label>
                           <input type="date" name="expiry_date" class="form-control" id="exampleInputPassword1" value="{{$data->expiry_date}}">
                           @error('expiry_date')
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