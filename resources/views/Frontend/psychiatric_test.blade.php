@extends('Frontend.master')
@section('title')
    Monosheba - Psychology Test
@endsection
@section('content')
    <!-- euestion action area start -->
    <div class="crumbs-area" style="height: 220px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="banner-content">
                        <h3>Psychological Test</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="crumbs">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><span>Psychology</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="euestion-action ptb--100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" id="phy_scale_form" action="{{url('show-question')}}">
                                {{ csrf_field() }}
                            <div class="container">
                                <div class="row">

                                    <div class="col-12 text-center" style="margin-top:100px">
                                        <h2>Start Psychological Your Test </h2>
                                        {{--<div class="age-div">--}}
                                            {{--<select class="city-select" name="age" id="age" style="height: 50px;width:300px; box-shadow: 0 8px 6px -6px black; opacity: .8">--}}
                                                {{--<option value="category" selected>Please Select Your Age </option>--}}
                                                {{--<option value="">10 Years - 15 Years</option>--}}
                                                {{--<option value="">16 years - 20 Years</option>--}}
                                                {{--<option value="">21 Years - 25 Years</option>--}}
                                                {{--<option value="">26 years - 30 Years</option>--}}
                                                {{--<option value="">31 Years - 35 Years</option>--}}
                                                {{--<option value="">36 years - 40 Years</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                        {{--<div class="gender-div">--}}
                                            {{--<select class="city-select" name="gender" id="gender" style="height: 50px;width:300px;  box-shadow: 0 8px 6px -6px black; opacity: .8">--}}
                                                {{--<option value="category" selected>Please Select Your Gender </option>--}}
                                                {{--<option value="Male">Male</option>--}}
                                                {{--<option value="Female">Female</option>--}}

                                            {{--</select>--}}
                                        {{--</div>--}}
                                        <div class="scale-div">
                                            <select class="city-select" name="scale" id="scale" style="height: 50px;width:300px; box-shadow: 0 8px 6px -6px black; opacity: .8">
                                                <option value="category" selected>Please Select Your Scales </option>
                                                <option value="Anxiety Scale">Anxiety Scale</option>
                                                <option value="Marrital Scale">Marrital Scale</option>
                                                <option value="Social Interaction Anxiety  Scale">Social Interaction Anxiety  Scale</option>
                                                <option value="Love obsession Scale ">Love obsession Scale </option>
                                                <option value="Depression Scale">Depression Scale</option>
                                                <option value="Dhaka University Obsessive Compulsive Scale (DUOCS)">Dhaka University Obsessive Compulsive Scale (DUOCS)</option>
                                            </select>
                                            <div><span style="color:red;" id="err_psy_test"> </span></div>
                                            <div class="btn-style-one">
                                                <button type="submit" class="btn btn-primary">Start Test</button>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('page-js-script')
    {{--<script>--}}
    {{--function myFunction() {--}}
    {{--$(".scale-div").hide();--}}
    {{--$(".gender-div").hide();--}}
    {{--}--}}

    {{--$(document).ready(function(){--}}
    {{--myFunction();--}}
    {{--});--}}
    {{--</script>--}}

    {{--<script>--}}
    {{--$('.age-div').change(function(){--}}
    {{--$(".scale-div").hide();--}}
    {{--$(".age-div").delay(500).fadeOut('fast');--}}
    {{--$(".gender-div").delay(1000).fadeIn('slow');--}}
    {{--})--}}

    {{--</script>--}}

    {{--<script>--}}
    {{--$('.gender-div').change(function(){--}}
    {{--$(".gender-div").delay(500).fadeOut('fast');--}}
    {{--$(".scale-div").delay(1000).fadeIn('slow');--}}
    {{--$(".age-div").hide();--}}
    {{--})--}}
    {{--</script>--}}
<script>
    $(document).ready(function(){
        $('#scale').on('input', function() {
            check_scale();

        });
        var scales;
        function check_scale(){
            if($('#scale').val()=='category'){
                $('#err_psy_test').html("choose any scale|click and select");
                $('#err_psy_test').show();
                scales=true;
                return false;
            }
            else{
                $('#err_psy_test').hide();
                return true;

            }
        }
        $("#phy_scale_form").submit(function () {
            scales=false;
            check_scale();
            if(scales ==false ){
                return true;
            }
            else {
                return false;

            }
        });
    });
</script>
    @endsection