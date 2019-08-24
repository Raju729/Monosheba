@extends('Admin.master')
@section('title')
   Monosheba Add Question
@endsection
@section('qsnmenu')
    active
@endsection
@section('addqsn')
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
                    Add Question

                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Question</a></li>
                    <li class="active"><a href="{{url('admin/question')}}">Add Question</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- right column -->
                    <form class="form-horizontal" id="question_form" method="post" action="{{url('admin/add-question')}}">

                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <!-- Horizontal Form -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Question Information</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="inputstudentid" class="col-sm-2 control-label">Select Scale</label>

                                        <div class="col-sm-10">
                                            <select name="scale" id="scale" class="form-control select2" style="width: 100%;">
                                                <option value="s" selected>Select Scale</option>
                                                <option value="Anxiety Scale">Anxiety Scale</option>
                                                <option value="Marrital Scale">Marrital Scale</option>
                                                <option value="Social Interaction Anxiety  Scale">Social Interaction Anxiety  Scale</option>
                                                <option value="Love obsession Scale ">Love obsession Scale </option>
                                                <option value="Depression Scale">Depression Scale</option>
                                                <option value="Dhaka University Obsessive Compulsive Scale (DUOCS)">Dhaka University Obsessive Compulsive Scale (DUOCS)</option>
                                            </select>
                                            <span style="color: red" id="err_scale"></span>
                                                            </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="question" class="col-sm-2 control-label">Question</label>

                                        <div class="col-sm-10">
                                            <textarea rows="4" cols="50" class="form-control" id="question" name="question"></textarea>
                                            <span style="color: red" id="err_question"></span>
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
    $(document).ready(function(){


    $('#first_name').on('input', function() {
    check_question();

    });
    $('#scale').on('input', function() {
    check_scale();

    });


    var qsn;
    var scales;


    function check_question(){
    if($('#question').val()==''){
    $('#err_question').html("Require Question??");
    $('#err_question').show();
    qsn = true;
    return false;
    }

    }


    function check_scale(){
    if($('#scale').val()=='s'){
    $('#err_scale').html("Require your scale info|click and select");
    $('#err_scale').show();
    scales=true;
    return false;
    }
    else{
    $('#err_scale').hide();
    return true;

    }

    }




    $("#question_form").submit(function () {
    qsn=false;
    scales=false;

    check_question();
    check_scale();

    if(qsn==false && scales ==false ){

    return true;
    }
    else {
    return false;


    }


    });









    });
    </script>
@stop
