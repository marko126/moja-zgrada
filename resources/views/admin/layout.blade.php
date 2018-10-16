<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Cubes PHP Admin</title>
        <!-- Bootstrap core CSS-->
        <link href="{{url('/skins/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{{url('/skins/admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="{{url('/skins/admin/css/sb-admin.css')}}" rel="stylesheet">
@stack('head_css')
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
@include('admin.navigation')
        <div class="content-wrapper">
            <div class="container-fluid">
@yield('content')
            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © Cubes School 2018</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="{{url('/skins/admin/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{url('/skins/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{url('/skins/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{url('/skins/admin/js/sb-admin.min.js')}}"></script>
@stack('footer_js')
    </body>
</html>

