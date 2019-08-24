<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{--css--}}
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo_about.ico')}}" />
    @include('Admin.Layouts.css')
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
{{--start--}}

    @include('Admin.Layouts.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('Admin.Layouts.leftmenu')
    {{--sidebar--}}

    <!-- Content Wrapper. Contains page content -->
     @yield('content')
    {{--maincontent--}}
    <!-- /.content-wrapper -->
   {{--footer--}}
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    {{--@include('Admin.Layouts.footer')--}}

    {{--@include('Admin.Layouts.footer')--}}
</div>
<!-- ./wrapper -->
{{--END--}}
<!-- jQuery 3 -->
@include('Admin.Layouts.js')
{{--jsfile--}}

@yield('page-js-script')
</body>
</html>
