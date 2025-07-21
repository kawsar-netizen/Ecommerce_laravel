<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ecommerce | Admin | Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
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

    <div class = "hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('public/backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('layouts.admin_partial.navbar')
  <!-- /.navbar -->
  @include('layouts.admin_partial.sidebar')
  <!-- Main Sidebar Container -->


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

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('public/backend')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('public/backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/backend')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend')}}/dist/js/adminlte.js"></script>

<!-- PAGE {{asset('public/backend')}}/plugins -->
<!-- jQuery Mapael -->
<script src="{{asset('public/backend')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{asset('public/backend')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('public/backend')}}/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/backend')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/backend')}}/dist/js/pages/dashboard2.js"></script>
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
                Swal.fire('Cancelled', 'You are still logged in.', 'info');
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
