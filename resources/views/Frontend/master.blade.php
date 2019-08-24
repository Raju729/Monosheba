<!doctype html>
<html class="no-js" lang="en">
<!-- Mirrored from irsfoundation.com/tf/html/medikare-preview/medikare/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Mar 2018 16:23:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo_about.ico')}}" />
    @include('Frontend.Layouts.css')
    <script src="{{asset('assets/asset_front/vendor/modernizr-2.8.3.min.js')}}}"></script>
</head>

<body>

{{--<div id="preloader">--}}
    {{--<div class="indicator">--}}
        {{--<svg width="16px" height="12px">--}}
            {{--<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>--}}
            {{--<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>--}}
        {{--</svg>--}}
    {{--</div>--}}
{{--</div>--}}
@include('Frontend.Layouts.header')
@yield('content')
@include('Frontend.Layouts.footer')
<!-- jquery latest version -->
{{--jsfile--}}
@include('Frontend.Layouts.js')
@yield('page-js-script')
</body>


<!-- Mirrored from irsfoundation.com/tf/html/medikare-preview/medikare/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Mar 2018 16:23:49 GMT -->
</html>