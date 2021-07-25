<!DOCTYPE html>
<html>
<head>
	<title>Laravel Sweet Alert Notification</title>
	<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
	<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body>


<h1 class="text-center">Laravel Sweet Alert Notification</h1>
@include('sweet::alert')


</body>
</html>
<style type="text/css">
   .table_position{
      position: relative;
      left: 95px;
      width: 100%;
      

   }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
   </div>

 <br> <br>
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

<div class="container table-responsive py-5" style="margin-top: -60px;">
   <div class="col-md-10 table_position">
   <table class="table table-bordered table-hover">
      <thead class="thead-dark">
         <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Product Image</th>
            <th scope="col">Grand Total</th>
            <th scope="col">Order Details</th>
            <th scope="col">Invoice</th>
         </tr>
      </thead>
      <tbody>
         @foreach($data as $list)
         <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->name}}</td>
            <td>{{$list->useremail}}</td>
            <td><img src="{{ url('/upload/'.$list->product_image)}}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
            <td>₹ {{$list->grand_total}}</td>
            <td><a href="" class="btn btn-info">View</a></td>
            <td>
               <a href="{{url('/orders/invoice')}}" class="btn btn-success">Invoice</a>
               
               <!-- <a href="{{url('manage_banner/edit/')}}/{{$list->id}}" class="btn btn-success">Edit</a>
               <a href="{{url('manage_banner/delete/')}}/{{$list->id}}" class="btn btn-danger">Delete</a> -->
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>

   </div>
</div>
<!-- END DATA TABLE-->