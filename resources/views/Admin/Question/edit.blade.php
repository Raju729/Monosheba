@extends('Admin.master')
@section('title')
    Monosheba Add Question
@endsection
@section('qsnmenu')
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
                    <form class="form-horizontal" id="question" method="post" action="{{url('admin/update-question'.'/'.$questions->id)}}">

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
                                                <option value="{{$questions->scale}}">{{$questions->scale}}</option>
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
                                            <input type="text" class="form-control" id="question" value="{{$questions->question}}" name="question">
                                            <span style="color: red" id="err_question"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            {{--<div class="col-sm-5"><input type="submit" class="btn btn-danger btn-block" value="Cancel" name="cancel"></div>--}}

                            <div class="col-md-offset-2 col-sm-5"><input type="submit" class="btn btn-success btn-block pull-right" value="Update" name="add"></div>

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
@stop
