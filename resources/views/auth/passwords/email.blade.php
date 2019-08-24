@extends('Admin.master')
@section('title')
    Monosheba change password
@endsection


@section('content')

    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Change Your Password
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="">profile</a></li>
                    <li class="active"><a href="">change passsowrd</a></li>
                </ol>
            </section>
            <section class="content-header">
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2">
                        <section class="content">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Reset Password</div>

                                                <div class="panel-body">
                                                    @if (session('status'))
                                                        <div class="alert alert-success">
                                                            {{ session('status') }}
                                                        </div>
                                                    @endif

                                                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                                        {{ csrf_field() }}

                                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                            <div class="col-md-6">
                                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                                @if ($errors->has('email'))
                                                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-6 col-md-offset-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Send Password Reset Link
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>
                </div>
            </section>


            <!-- /.content -->
        </div>
    </div>
    <!-- ./wrapper -->
    <!-- /Insert modal -->


    {{--Add city--}}

    <!-- / Edit modal -->

@endsection

