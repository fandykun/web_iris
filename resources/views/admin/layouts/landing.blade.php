<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>
  <link rel="icon" type="image/png" href="{{ asset('/iris/logo.png') }}" />
  <!-- Custom fonts for this template-->
  <link href="{{ asset('sb-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="{{ asset('sneaky/vendors/bootstrap/bootstrap.min.css') }}">
  <link href="{{ asset('sb-admin/css/sb-admin.css') }}" rel="stylesheet">
  <style>
  </style>
</head>

<body id="page-top">
    @include('admin.partials.header')
    <div id="wrapper">
        @include('admin.partials.sidebar')
        <div id="content-wrapper">
            <div class="container-fluid">
            @yield('content')
            </div>
        @include('admin.partials.footer')
    </div>


    </div>

  <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('sb-admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ asset('sb-admin/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('sb-admin/vendor/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('sb-admin/js/sb-admin.min.js') }}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{ asset('sb-admin/js/demo/datatables-demo.js') }}"></script>
  <script src="{{ asset('sb-admin/js/demo/chart-area-demo.js') }}"></script>
    @yield('script')
    @yield('script2')
    @yield('script3')
</body>

</html>
