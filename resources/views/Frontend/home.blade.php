@extends('Frontend.master')
@section('title')
    Monosheba - Home
@endsection
@section('content')

    <div id="preloader">
        <div class="indicator">
            <svg width="16px" height="12px">
                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            </svg>
        </div>
    </div>

    <!-- slider three area start -->
    <div class="slider-three parallax"  data-speed="3"  data-bg-image="{{asset('assets/asset_front/img/slider/slider-img5.jpg')}}">
        <div class="s3-content">
            <h2 style="color: white">Find Your Service</h2>
            <form method="post" action="{{url('/psychiatric-details')}}" id="searchform" name="search_form">
                {{ csrf_field() }}
            <div class="col-md-12 city-div">

                <div class="frm_select backshadow">
                    <select required class="city-select" name="city" id="cityselect" style=" " >
                        <option value="city" selected>Please Select City</option>
                        @foreach($city as $cities)
                            <option  value="{{$cities->name}}">{{$cities->name}}</option>
                        @endforeach
                    </select>

                    <select required name="speciality" class="speciality" id="specialityselect" style=" ">
                        <option value="speciality"  selected>Please Select Speciality</option>
                        @foreach($psychiatric as $psychiatrics)
                            <option value="{{$psychiatrics->speciality}}">{{$psychiatrics->speciality}}</option>
                        @endforeach
                    </select>

                    <select required name="name" class="speciality"  id="search" style=" " >
                        <option value="category" selected disabled>Please Select Psychiatrict</option>
                    </select>

                    {{--<input type="text" class="searchtext" required name="name" id="search" data-token="{{ csrf_token() }}" onchange="hideFunction()" placeholder="Please Write Full Name of Psychiatric" style="  ">--}}
                    <button class="button_home btn"><span class="glyphicon glyphicon-search">Search</span></button>
                </div>
            </div>
            {{--<div class="row">--}}
            {{--<div class="col-md-6"></div>--}}
            {{--<div class="col-md-4 ">--}}
                {{--<table id= class="responsive" style="width: 280px;opacity:0.9;background: white;border-radius: 10px">--}}
                    {{--<tbody></tbody>--}}
                {{--</table>--}}
                {{--<select  required class="show_result" multiple id="display_result" onchange="myFunction()">--}}

                {{--</select>--}}
            {{--</div>--}}
                {{--<div class="col-md-2"></div>--}}
            {{--</div>--}}
            </form>
        </div>
       </div>


    <div class="content-wrapper">
<!-- feature two area start -->
<div class="feature-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ft-single bg-blue">
                    <span class="flaticon-first-aid-kit "></span>
                    <h4>Primary Mental Health Care</h4>
                    <p>Test your psychological condition. </p>
                    <a href="{{url('/psychology-test')}}" class="read-more"><i class="icofont icofont-double-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ft-single bg-blue">
                    {{--<span class="flaticon-dna"></span>--}}
                    <h4>Need Help?</h4>
                    <p style="font-family:'Times New Roman' ">(SUNDAY TO THRUSDAY)..4pm to 9pm
                    </p><p style="font-family:'Times New Roman' "></p>
                    <p style="font-family:'Times New Roman' ">Skype ID: monosheba Bangladesh</p>
                    <p style="font-family:'Times New Roman' ">For Appointment call : 01867870500, 01869664421</p>
                    <a href="{{url('/contact')}}" class="read-more"><i class="icofont icofont-double-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ft-single bg-blue">
                    <span class="flaticon-dna"></span>
                    <h4>Have Any Question?</h4>
                    <p style="font-family:'Times New Roman' ">Ask Monosheba</p>
                    <a href="{{url('/ask-monosheba')}}" class="read-more"><i class="icofont icofont-double-right"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- feature two area end -->
<!-- about area start -->
<div class="about-area about-two ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 "style="box-shadow: -1px 2px 10px 0px rgba(127,127,127,1);border-radius: 8px">
                <div class="abt3-left-img">
                    <div class="ft-single bg-blue">

                        <h4>Want To  Advertise Your Business,Product Or Company ?</h4>
                        <h5 style="font-family:'Times New Roman' ">E-mail: monosheba18@gmail.com</h5>
                        <h5>Phone No:</h5>
                        <a  class="read-more"><i class="icofont icofont-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="about-title">
                        <p style="font-family:'Times New Roman' ">Our Story</p>
                        <h2><span>ABOUT</span> Monosheba </h2>
                    </div>
                    <div class="abt-list">
                        <div class="abt-single-list">
                            <h4><i class="icofont icofont-heart-beat-alt"></i>Professionalism Health Service</h4>
                            <p>Find your mental health professional and track your psychological health.
                            </p>
                        </div>
                        <div class="about-funfact">
                            <div class="s-funfact">
                                <h2 class="counterup">{{$psy}}</h2>
                                <span>Psychiatric</span>
                            </div>
                            <div class="s-funfact">
                                <h2 class="counterup">{{$qsn}}</h2>
                                <span>Question Answer</span>
                            </div>
                            <div class="s-funfact">
                                <h2 class="counterup">00</h2>
                                <span>professional staff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area end -->
<!-- why-choose area start -->
<div class="why-choose why-choose-three bg-gray pb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <div class="about-title">
                        <h2><span>Why</span> Choose Us</h2>
                    </div>
                    <div class="whyc-list-area">
                        <div class="single-list">
                            <div class="icon">
                                <i class="icofont icofont-nurse"></i>
                            </div>
                            <div class="content">
                                <h2>Counseling Over Phone</h2>
                                <p>From here you can take free medical counselling from our expert psy Psychiatric.</p>
                            </div>
                        </div>
                        <div class="single-list">
                            <div class="icon">
                                <i class="icofont icofont-medical-sign-alt"></i>
                            </div>
                            <div class="content">
                                <h2>Well Experienced Mental Health Professionals</h2>
                                <p> will help you to take Right Decision,based on your psychological condition.  </p>
                            </div>
                        </div>
                        <div class="single-list">
                            <div class="icon">
                                <i class="icofont icofont-heartbeat"></i>
                            </div>
                            <div class="content">
                                <h2>Track your Progress</h2>
                                <p>Here You can find some psychological test full free. </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- why-choose area end -->
    </div>
@endsection

@section('page-js-script')
    <script type="text/javascript">
        $('#specialityselect').change(function (){
            $city=$( "#cityselect option:selected" ).text();
            $speciality=$( "#specialityselect option:selected" ).text();

            if($city=='Please Select City'){
                $("option:selected").prop("selected", false);
                $('#cityselect').css('border-color', 'red');
                $(".backshadow").notify("Please Select City", "error");

            }else{
                psychiatrictshow();
            }
        });

        $('#cityselect').change(function (){
            $city=$( "#cityselect option:selected" ).text();
            $speciality=$( "#specialityselect option:selected" ).text();

            if($speciality!='Please Select Speciality'){
                psychiatrictshow();
            }
        });


        function psychiatrictshow(){
            var token = $(this).data("token");
            $city=$( "#cityselect option:selected" ).text();
            $speciality=$( "#specialityselect option:selected" ).text();
            var url ="search-psychiatric"+"/"+$city+"/"+$speciality;
            $.ajax({
                type : 'get',
                url:url,
                data:{'city':$city,'speciality':$speciality,'_token': token},
                dataType: "JSON",
                success:function(data){
                    $('#search ').html(data);
                }
            });
        }

    </script>

    <script>
        $("#searchform").submit(function () {
            $city=$( "#cityselect option:selected" ).text();
            $speciality=$( "#specialityselect option:selected" ).text();
            if($city=='Please Select City' && $speciality=='Please Select Speciality'){
                $(".backshadow").notify("Please Select City And Speciality", "error");
                return false;
            }
        });
    </script>

    {{--<script type="text/javascript">--}}
        {{--$('#search').on('keyup',function(){--}}
            {{--var token = $(this).data("token");--}}
            {{--$value=$(this).val();--}}
            {{--$city=$( "#cityselect option:selected" ).text();--}}
            {{--$speciality=$( "#specialityselect option:selected" ).text();--}}
            {{--var url ="search-psychiatric"+"/"+$value+"/"+$city+"/"+$speciality;--}}
            {{--$.ajax({--}}
                {{--type : 'get',--}}
                {{--url:url,--}}
                {{--data:{'name':$value,'city':$city,'speciality':$speciality,'_token': token},--}}
                {{--dataType: "JSON",--}}
                {{--success:function(data){--}}
                    {{--//alert(data);--}}
                     {{--$('#display_result ').html(data);--}}
                    {{--$("#display_result").show();--}}
                {{--}--}}
            {{--});--}}
        {{--})--}}

    {{--</script>--}}
    {{--<script>--}}
        {{--function myFunction() {--}}
            {{--var x = document.getElementById("display_result").value;--}}

            {{--document.getElementById("search").value =  x;--}}
            {{--if(x!=null){--}}
                {{--$("#display_result").hide();--}}
            {{--}--}}

        {{--}--}}
    {{--</script>--}}

    {{--<script>--}}
        {{--function hideFunction() {--}}
            {{--if(document.getElementById("search").value =""){--}}
                {{--$("#display_result").hide();--}}
            {{--}--}}
        {{--}--}}
    {{--</script>--}}

@endsection