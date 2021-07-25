@extends('admin/master')
@section('page_title','Add Coupon')
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
               <a href="{{url('admin/manage_coupon')}}" class="btn btn-success">Manage Coupon</a>
               <br><br>
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
                     <h3 class="card-title">Add Coupon</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{url('/save/coupon')}}" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        
                        <div class="form-group">
                           <label for="exampleInputPassword1">Coupon Code</label>
                           <input type="text" name="coupon_code" class="form-control" id="exampleInputPassword1" placeholder="Enter Coupon Code">
                           @error('coupon_code')
                           <span class="alert alert-danger error">
                           {{$message}}
                           </span>
                           <br>
                           @enderror
                        </div>
                           <div class="form-group">
                           <label for="exampleInputPassword1">Coupon Amount</label>
                           <input type="number" name="amount" class="form-control" id="exampleInputPassword1" placeholder="Enter the  Amount">
                           @error('amount')
                           <span class="alert alert-danger error">
                           {{$message}}
                           </span>
                           <br>
                           @enderror
                        </div>
                        <div class="form-group">
                        <label>Amount Type</label>
                         <select name="amount_type" id="" class="form-control">
                         <option disabled selected>Select the Amount Type</option>
                         <option value="percentage">Percentage</option>
                         <option value="fixed">Fixed</option>
                         </select>
                         </div>
                           @error('amount_type')
                           <span class="alert alert-danger error">
                           {{$message}}
                           </span>
                           <br>
                           @enderror

                           <div class="form-group">
                           <label for="exampleInputPassword1">Expiry Date</label>
                           <input type="date" name="expiry_date" class="form-control" id="exampleInputPassword1" >
                           @error('expiry_date')
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