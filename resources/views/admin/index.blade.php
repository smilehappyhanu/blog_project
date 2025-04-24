<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('admin-template/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('admin-template/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('admin-template/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('admin-template/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('admin-template/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('admin-template/img/favicon.icon')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        @include('admin.body')
        @include('admin.footer')
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admin-template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin-template/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admin-template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin-template/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admin-template/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin-template/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin-template/js/charts-home.js')}}"></script>
    <script src="{{asset('admin-template/js/front.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>