<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Welcome Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="@yield('dashboardmenu')">
                <a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>

            <li class="treeview @if(isset($citymenu)) {{$citymenu}} @endif">
                <a href="{{url('admin/city')}}">
                    <i class="fa fa-edit"></i> <span>City</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu ">
                    <li class="@yield('citydetails')"><a href="{{url('admin/city')}}"><i class="fa fa-circle-o"></i>City Details</a></li>
                </ul>
            </li>
            <li class="treeview @yield('psymenu')">
                <a href="{{url('admin/show-Psychiatrict')}}">
                    <i class="fa fa-pie-chart"></i>
                    <span>Psychiatrict</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu ">
                    <li class="@yield('addpsy')"><a href="{{url('admin/Psychiatrict')}}"><i class="fa fa-circle-o"></i> Add Psychiatrict</a></li>
                    <li class="@yield('showpsy')"><a href="{{url('admin/show-Psychiatrict')}}"><i class="fa fa-circle-o"></i>Psychiatrict Details</a></li>

                </ul>
            </li>

            <li class="treeview @yield('blogmenu')">
                <a href="{{url('admin/posts')}}">
                    <i class="fa fa-edit"></i> <span>News & Blogs</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@yield('addblog')"><a href="{{url('admin/posts/create')}}"><i class="fa fa-circle-o "></i> Publish News</a></li>
                    <li class="@yield('showblog')"><a href="{{url('admin/posts')}}"><i class="fa fa-circle-o"></i> Manage Blogs</a></li>
                </ul>
            </li>





            <li class="treeview @yield('qsnmenu')">
                <a href="{{url('admin/show-question')}}">
                    <i class="fa fa-edit"></i> <span>Question</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@yield('addqsn')"><a href="{{url('admin/question')}}"><i class="fa fa-circle-o"></i>Add Question</a></li>

                    <li class="@yield('showqsn')"><a href="{{url('admin/show-question')}}"><i class="fa fa-circle-o"></i>Manage Question</a></li>

                </ul>
            </li>

            <li class="treeview @yield('uqsnmenu')">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>User uestion</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@yield('uqsnshow')"><a href="{{url('admin/userquestions')}}"><i class="fa fa-circle-o"></i>Managae User Question</a></li>
                    <li class="@yield('uqsncmt')"><a href="{{url('admin/show-comment')}}"><i class="fa fa-circle-o"></i>Show User Comments</a></li>

                </ul>
            </li>


            <li class="header">Contact</li>
            <li class="@yield('contct')"><a href="{{url('admin/contact')}}"><i class="fa fa-circle-o text-red"></i> <span>Contact Message</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>