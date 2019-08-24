<!-- header area start -->
<header>
    <!-- header top area start -->
    <div class="header-box-style">
        <div class="container-fluid">

                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo"><a href="{{url('/')}}" title="Monosheba"><img src="{{asset('assets/asset_front/img/icon/logo.png')}}" alt="logo" style="height: 70px;"></a></div>
                    </div>
                    <div class="col-lg-9 d-none d-lg-block">
                        <div class="main-menu">
                            <nav id="slick_nav">
                                <ul>
                                    <li class="@if(isset($home)) {{$home}} @endif"><a href="{{url('/home')}}">Home</a>

                                    </li>
                                    <li class="@if(isset($about)) {{$about}} @endif"><a href="{{url('/about-us')}}">About us</a>
                                    </li>
                                    <li class="@if(isset($test)) {{$test}} @endif" ><a href="{{url('/psychology-test')}}">Psychological Test</a></li>
                                    <li class="@if(isset($stream)) {{$stream}} @endif"><a href="javascript:void(0);">Any Question<i class="icofont icofont-simple-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{url('/ask-monosheba')}}">Ask Monosheba</a></li>
                                            <li><a href="{{url('/question-stream')}}">Question Stream</a></li>

                                        </ul>
                                    </li>
                                    <li class="@if(isset($blog)) {{$blog}} @endif"><a href="{{url('/blog')}}">blog</a></li>
                                    <li class="@if(isset($contact)) {{$contact}} @endif"><a href="{{url('/contact')}}">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12  d-block d-xl-none d-lg-none">
                        <div class="mobile_menu"></div>
                    </div>
                </div>

        </div>
    </div>
</header>
<!-- header area end -->

