<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>@yield('page_title')</title>
      <link rel="icon" href="{{asset('../images/favicon.png')}}" type="image/gif" sizes="128x128">
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="{{asset('Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
      <!-- iCheck -->
      <link rel="stylesheet" href="{{asset('Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
      <!-- JQVMap -->
      <link rel="stylesheet" href="{{asset('Admin/plugins/jqvmap/jqvmap.min.css')}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css')}}">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{asset('Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="{{asset('Admin/plugins/daterangepicker/daterangepicker.css')}}">
      <!-- summernote -->
      <link rel="stylesheet" href="{{asset('Admin/plugins/summernote/summernote-bs4.css')}}">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <!-- Data table links -->
      <link rel="stylesheet" href="{{asset('Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
      <link rel="stylesheet" href="{{asset('Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
     <!-- Google Font: Source Sans Pro -->
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <!-- data table links -->
      <!-- Toaster Notification -->
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
     
      <style type="text/css">
         .logout_btn{
            position: relative; 
            right: 0px; 
            top: -1px; 
            font-size: 16px; 
            color: blue; 

         }
        .logout_btn:hover{
         text-decoration: underline;
        }

       #dashboard_color{
            background-color: #007bff;
             color: #fff;
           /*  background-color: black;
             color: white;
*/      }
         .nav-link.active:hover{
            background-color:  #f33535!important;
            border-color:  #f33535!important;
            color: white!important;
            transition: all .325s ease-in-out;
            padding-left: 25px;
         }
         .error{
            position: relative;
            top: 11px;
            left: -19px;
            font-size: 16px;
            font-weight: bold;
            font-style: italic;
            background-color: white;
            border: none;
            color: red;

}
            
        
      </style>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
               </li>
               
            </ul>
            <!-- SEARCH FORM -->
           
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
             <li>
                 <div class="info">
                          <a href="{{url('admin/logout')}}" class="logout_btn"><i class="fas fa-power-off"></i>Logout</a> 
                  </div>
             </li>
            </ul>
         </nav>

         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
            <img src="{{asset('Admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
            <span class="brand-text font-weight-light">E-commerce</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                     <img src="{{asset('Admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                     <a href="#" class="d-block">
                       Rohit parashar
                     </a>
                  </div>
               </div>
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                  <li class="nav-item has-treeview menu-open">
                     <a href="#" class="nav-link" id="dashboard_color">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Dashboard
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item active">
                           <a href="{{url('admin/category/add_category')}}" class="nav-link active">
                              <i class="far fa-list nav-icon"></i>
                              <p> Add Category</p>
                           </a>
                        </li>
                        </li>
                        <li class="nav-item active">
                           <a href="{{url('admin/product')}}" class="nav-link active">
                              <i class="fas fa-shopping-cart nav-icon"></i>
                              <p>Add Product</p>
                           </a>
                        </li>
                        <li class="nav-item active">
                           <a href="{{url('admin/coupon')}}" class="nav-link active">
                              <i class="fas fa-tag nav-icon"></i>
                              <p>Add Coupon</p>
                           </a>
                        </li>
                        <li class="nav-item active">
                           <a href="{{url('admin/banner')}}" class="nav-link active">
                              <i class="fas fa-images nav-icon"></i>
                              <p>Add Banner</p>
                           </a>
                        </li>
                        <li class="nav-item active">
                           <a href="{{url('/orders')}}" class="nav-link active">
                             <i class="fas fa-hamburger nav-icon"></i>
                              <p> Orders</p>
                           </a>
                        </li>
                        <li class="nav-item active">
                           <a href="{{url('admin/menu-item')}}" class="nav-link active">
                             <i class="fas fa-bars nav-icon"></i>
                              <p>Navigation Menu</p>
                           </a>
                        </li>
                        <li class="nav-item active">
                           <a href="{{url('admin/sub-menu-item')}}" class="nav-link active">
                             <i class="fas fa-link nav-icon"></i>
                              <p>Navigation Sub Menu</p>
                           </a>
                        </li>
                        <li class="nav-item active">
                           <a href="{{url('admin/users-list')}}" class="nav-link active">
                             <i class="fas fa-link nav-icon"></i>
                              <p>Registered Users</p>
                           </a>
                        </li>
                     </ul>
               </nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>
         @yield('content')
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="{{asset('Admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
         $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- ChartJS -->
      <script src="{{asset('Admin/plugins/chart.js/Chart.min.js')}}"></script>
      <!-- Sparkline -->
      <script src="{{asset('Admin/plugins/sparklines/sparkline.js')}}"></script>
      <!-- JQVMap -->
      <script src="{{asset('Admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
      <script src="{{asset('Admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
      <!-- jQuery Knob Chart -->
      <script src="{{asset('Admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
      <!-- daterangepicker -->
      <script src="{{asset('Admin/plugins/moment/moment.min.js')}}"></script>
      <script src="{{asset('Admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="{{asset('Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
      <!-- Summernote -->
      <script src="{{asset('Admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
      <!-- overlayScrollbars -->
      <script src="{{asset('Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{asset('Admin/dist/js/adminlte.js')}}"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="{{asset('Admin/dist/js/pages/dashboard.js')}}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{asset('Admin/dist/js/demo.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
      <script src="{{asset('Admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
      <script src="{{asset('Admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{asset('Admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
       <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
      @if(Session::has('record_added'))
      <script>
      toastr.success("{!!Session::get('record_added')!!}");
     </script>
     @endif
     @if(Session::has('record_updated'))
      <script>
      toastr.info("{!!Session::get('record_updated')!!}");
     </script>
     @endif
      @if(Session::has('record_deleted'))
      <script>
      toastr.warning("{!!Session::get('record_deleted')!!}");
     </script>
     @endif
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>
   </body>
</html>