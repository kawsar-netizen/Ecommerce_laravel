<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ecommerce | Admin | Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/summernote/summernote-bs4.min.css">
       <!-- sweethart alert for css -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/sweetalert2/sweetalert2.css">
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/sweetalert2/sweetalert2.min.css">
  <!-- sweetalert end -->
  <!-- toastr alert for css -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/toastr/toastr.css">
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/toastr/toastr.min.css">
  <!-- toastr end -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body>

    @guest

    @else

    <div class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('public/backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
@include('layouts.admin_partial.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('layouts.admin_partial.sidebar')


 @endguest

  <!-- Content Wrapper. Contains page content -->
 @yield('admin_content')
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public/backend')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/backend')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('public/backend')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('public/backend')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('public/backend')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/backend')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('public/backend')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/backend')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('public/backend')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/backend')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('public/backend')}}/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/backend')}}/dist/js/pages/dashboard.js"></script>
<!-- sweetalert for js -->
 <script src="{{asset('public/backend')}}/plugins/sweetalert2/sweetalert2.js"></script>
 <script src="{{asset('public/backend')}}/plugins/sweetalert2/sweetalert2.min.js"></script>
 <script src="{{asset('public/backend')}}/plugins/sweetalert2/sweetalert2.all.min.js"></script>
 <script src="{{asset('public/backend')}}/plugins/sweetalert2/sweetalert2.all.js"></script>
 <!-- toastr for js -->
<script src="{{asset('public/backend')}}/plugins/toastr/toastr.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/toastr/toastr.js.map"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('public/backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- sweetalet and toastr code after link including -->
<script>
      <!-- Before delete showing alert message -->

        $(document).on("click", "#delete", async function(e) {
            e.preventDefault();
            var link = $(this).attr("href");

            const result = await Swal.fire({
                title                 : 'Are you sure you want to delete?',
                text                  : "",
                icon                  : 'warning',
                showCancelButton      : true,
                confirmButtonColor    : '#3085d6',
                cancelButtonColor     : '#d33',
                confirmButtonText     : 'Yes, delete',
                cancelButtonText      : 'Cancel'
            });

            if (result.isConfirmed) {
                window.location.href = link;
            } else {
                Swal.fire('Cancelled', 'Data still showing.', 'info');
            }
        });
</script>
<!-- Before logout showing alert message -->
<script>
        $(document).on("click", "#logout", async function(e) {
            e.preventDefault();
            var link = $(this).attr("href");

            const result = await Swal.fire({
                title                 : 'Are you sure you want to logout?',
                text                  : "",
                icon                  : 'warning',
                showCancelButton      : true,
                confirmButtonColor    : '#3085d6',
                cancelButtonColor     : '#d33',
                confirmButtonText     : 'Yes, logout',
                cancelButtonText      : 'Cancel'
            });

            if (result.isConfirmed) {
                window.location.href = link;
            } else {
                Swal.fire('Cancelled', 'You are still logged in.', 'info');
            }
        });
</script>

<script>
  @if(Session::has('message'))
          var type = "{{Session :: get('alert-type','info')}}"
          switch(type){
            case 'info':
              toastr.info("{{Session :: get('message')}}");
              break;
              case 'success':
              toastr.success("{{Session :: get('message')}}");
              break;
              case 'warning':
              toastr.warning("{{Session :: get('message')}}");
              break;
              case 'error':
              toastr.warning("{{Session :: get('error')}}");
              break;
  }
  @endif
</script>

<!-- Datatable script  -->
      <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
</body>
</html>
