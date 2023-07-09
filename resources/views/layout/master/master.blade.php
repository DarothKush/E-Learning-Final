<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.master.header')
</head>
<body>
    @include('layout.master.sidebar')
    @yield('content')
    @include('layout.master.footer')
    
    <!-- Javascript -->
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>