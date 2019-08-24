@extends('Admin.master')
@section('title')
   Monosheba Add Psychiatrict
@endsection
@section('psymenu')
    active
    @endsection
@section('addpsy')
    active
@endsection
@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Add Psychiatrict

                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{url('admin/show-Psychiatrict')}}">Psychiatrict</a></li>
                    <li class="active"><a href="{{url('admin/Psychiatrict')}}">Add Psychiatrict</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- right column -->
                    <form class="form-horizontal" id="psy_form" method="post" action="{{url('admin/add-Psychiatrict')}}">

                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <!-- Horizontal Form -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Psychiatrict Information</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="inputstudentid" class="col-sm-2 control-label">Select Cities</label>

                                        <div class="col-sm-10">
                                            <select name="city" id="city" class="form-control select2" style="width: 100%;">
                                               <option value=" ">Select City</option>
                                                @foreach($city as $cities)
                                                <option value="{{$cities->name}}">{{$cities->name}}</option>
                                                @endforeach
                                            </select>
                                            <span style="color: red" id="err_city"></span>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="psychiatric_name" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" placeholder="Psychiatric Full Name" name="name">
                                            <span style="color: red" id="err_name"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="psychiatric_phone" class="col-sm-2 control-label">Phone Number</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone_no" placeholder="Psychiatric Phone Number" name="phone_no">
                                            <span style="color: red" id="err_phn"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="speciality" class="col-sm-2 control-label">Speciality</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="speciality" placeholder="Speciality" name="speciality">
                                            <span style="color: red" id="err_spclty"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="designation" class="col-sm-2 control-label">Designation</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="designation" placeholder="Designation" name="designation">
                                            <span style="color: red" id="err_desig"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="location" class="col-sm-2 control-label">Location</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="joblocation" placeholder="Job Location" name="joblocation">
                                            <span style="color: red" id="err_location"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            {{--<div class="col-sm-5"><input type="submit" class="btn btn-danger btn-block" value="Cancel" name="cancel"></div>--}}
                            <div class="col-md-offset-2 col-sm-5"><input type="submit" class="btn btn-success btn-block pull-right" value="ADD" name="add"></div>

                        </div>


                    </form>
                </div>
            </section>

        </div>
        <!-- /.content-wrapper -->
    </div>
    </body>

@endsection
@section('page-js-script')

    <script>
        $(function () {
            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#name').on('input', function () {
                check_name();

            });
            $('#phone_no').on('input', function () {
                check_phone();

            });

            $('#speciality').on('input', function () {
                check_speciality();

            });
            $('#designation').on('input', function () {
                check_designation();

            });
            $('#joblocation').on('input', function () {
                check_location();

            });

            $('#first_name').on('input', function () {
                check_cities();
            });
            var p_desig;
            var p_name;
            var p_phn;
            var p_spclty;
            var p_location;
            var p_city;


            function check_name() {
                if ($('#name').val() == '') {
                    $('#err_name').html("Require  name");
                    $('#err_name').show();
                    p_name=true;
                    return false;
                }

            }

            function check_phone() {
                if ($('#phone_no').val() == '') {
                    $('#err_phn').html("Require  phone number");
                    $('#err_phn').show();
                    p_phn=true;
                    return false;
                }
                else{
                    $('#err_phn').hide();
                    return true;

                }
            }

            function check_speciality() {
                if ($('#speciality').val() == '') {
                    $('#err_spclty').html("Require  phychiratic speciality");
                    $('#err_spclty').show();
                    p_spclty=true;
                    return false;
                }
                else{
                    $('#err_spclty').hide();
                    return true;

                }
            }
            function check_designation() {
                if ($('#designation').val() == '') {
                    $('#err_desig').html("Require  phychiratic Designation");
                    $('#err_desig').show();
                    p_desig=true;
                    return false;
                }
                else{
                    $('#err_desig').hide();
                    return true;

                }
            }
            function check_location() {
                if ($('#joblocation').val() == '') {
                    $('#err_location').html("Require  phone number");
                    $('#err_location').show();
                    p_location=true;
                    return false;
                }
                else{
                    $('#err_location').hide();
                    return true;

                }
            }
            function check_city() {
                if ($('#city').val() == 's') {
                    $('#err_city').html("Require  city address");
                    $('#err_city').show();
                    p_city=true;
                    return false;
                }
                else{
                    $('#err_city').hide();
                    return true;

                }
            }

            $("#psy_form").submit(function () {
                p_city=false;
                p_location=false;
                p_desig=false;
                p_spclty=false;
                p_name=false;
                p_phn=false;

                check_name();
                check_phone();
                check_speciality();
                check_designation();
                check_location();
                check_city();

                if(p_name==false && p_desig==false && p_phn==false && p_spclty==false && p_city==false && p_location==false){

                    return true;
                }
                else {
                    return false;


                }


            });


        });

    </script>
@stop
