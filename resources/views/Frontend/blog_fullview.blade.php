@extends('Frontend.master')
@section('title')
    Monosheba - Blog-{{$result->title}}
@endsection
@section('content')

    <!-- blog area start -->

    {{--<div class="crumbs-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 col-sm-8">--}}
                    {{--<div class="banner-content">--}}
                        {{--<h2>Our Blog</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 col-sm-4">--}}
                    {{--<div class="crumbs">--}}
                        {{--<ul>--}}
                            {{--<li><a href="{{url('home')}}">Home</a></li>--}}
                            {{--<li><a href="{{url('blog')}}">Back To Blog</a></li>--}}

                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    <div class="blog-area ptb--100" style="background-color: #eeead3 ">
        <div class="container" >
            <div class="row" >
                <div class="col-lg-12 ">
                    <svg viewBox="0,0,800,100">
                        <text x="" y="40">
                            {{$result->title}}
                            <animate attributeName="x" from="-100" to="400" dur="6s" repeatCount="indefinite"></animate>
                        </text>
                    </svg>
                </div>

                    <div class="col-lg-10 ">

                        <div class="box-title">
                            <p><h2>{{$result->title}}</h2></p>
                        </div>
                    </div>
                        <div class="col-lg-2 ">
                            <div class="box-title">
                                <p style="color:#9f191f">{{$result->created_at->format('M j, Y')}}</p>By-<b>{{$result->writer}}</b>
                            </div>
                        </div>

                        <div class="col-lg-11 ">
                            <div class="box-title">
                                <p>{!! $result->body !!} </p>
                            </div>
                        </div>



            </div>


        </div>
    </div>

    <!-- blog area end -->
@endsection
@section('page-js-script')

@endsection