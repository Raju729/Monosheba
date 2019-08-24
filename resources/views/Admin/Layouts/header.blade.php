<header class="main-header">
    <!-- Logo -->
    <a href="{{url('admin/dashboard')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SE</b>BA</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>MONOSHEBA</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                         <span class="hidden-xs">@if(isset(Auth::user()->name ))
                                 {{ Auth::user()->name }}

                             @endif
                            </span>
                        <img src="{{asset('assets/img/logo.png')}}" style="height: 50px; width: 50px" class="img-circle" alt="User Image">

                    </a>

                    <ul class="dropdown-menu">



                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('assets/img/logo.png')}}" class="img-circle" alt="User Image">

                            <p>
                                Monosheba
                                <small>Admin-Panel</small>
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{--<div class="pull-left">--}}
                                {{--<a href="{{url('password/reset/shdgfh')}}" class="btn btn-default btn-flat">change password</a>--}}
                            {{--</div>--}}
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> log out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>