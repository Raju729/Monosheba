@extends('Frontend.master')
@section('title')
    Monosheba - Psychiatric Details
@endsection
@section('content')

    <!-- banner area start -->
    <div class="crumbs-area" style="height: 220px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="banner-content">
                        <h2>Psychiatric Details</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="crumbs">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><span>Psychiatric</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->
    <!-- doctor details start -->
    <div class="doctor-details ptb--100" >
        <div class="container">
            <div class="row">
                {{--<div class="screen-reader-response"></div>--}}

                @foreach($data as $data)
                <div class=" col-md-12 "style="background-color:#3ba3bd;" align="center">
                    <img style="height: 200px" class="img-circle img-responsive" src="{{asset('assets/asset_front/img/doctor.png')}}" alt="doctor image">
                        <h2>{{$data->name}}</h2>
                    <h4 style="color: black; ">{{$data->speciality}}</h4>
                </div>
                <div class=" col-md-5" align="center" style="padding: 10px;color: #3ba3bd; margin-top: 10px;box-shadow: -1px 2px 24px 0px rgba(127,127,127,1);">
                    <h3 style="color: #3ba3bd ">Specialist In</h3>
                    <p style="color: black;">{{$data->designation}}</p>

                </div>
                <div style="margin-top: 30px;" class="col-md-2"></div>
<div class=" col-md-5" align="center"style="padding: 10px;color:#3ba3bd; margin-top: 10px; box-shadow: -1px 2px 24px 0px rgba(127,127,127,1);">
    <ul class="doctor-meta-address">
        <li><i style="color: #38FDFF " class="icofont icofont-location-pin"></i>{{$data->joblocation}}</li>
        {{--<li><i style="color: #38FDFF " class="icofont icofont-email"></i>{{$data->name}}</li>--}}
        <li><i style="color: #38FDFF " class="icofont icofont-phone"></i>{{$data->phone_no}}</li>
    </ul>
</div>

                    @endforeach

            </div>
        </div>
    </div>
    <!-- doctor details end -->
@endsection