@extends('Admin.master')
@section('title')
    Monosheba Edit blog
@endsection
@section('blogmenu')
    active
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="{{url('admin/posts')}}">post</a></li>
                <li class="active"> Update Post</li>
            </ol>
        </section>

        <!-- Main content -->
        <div class="container">
            <div class="row">


                <div class=" col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Edit post #{{ $post->id }}</div>
                        <div class="panel-body">
                            <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                            <br />
                            <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <form method="POST" action="{{ url('/admin/posts/' . $post->id) }}"id="blog_form" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}

                                @include ('Admin.posts.form', ['submitButtonText' => 'Update'])

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    @endsection

@section('page-js-script')


    <script>
        $(document).ready(function(){



            $('#blog_title').on('input', function() {
                check_title();

            });

            $('#blog_body').on('input', function() {
                check_body();

            });




            var title;
            var body;


            function check_title(){
                if($('#blog_title').val()==''){
                    $('#title_error').html("Require First name");
                    $('#title_error').show();
                    title = true;
                    return false;
                }
                else{
                    $('#title_error').hide();
                    return true;

                }

            }
            function check_body(){
                if($('#blog_body').val()==''){
                    $('#body_error').html("Require last name");
                    $('#body_error').show();
                    body = true;
                    return false;
                }
                else{
                    $('#body_error').hide();
                    return true;

                }

            }

            $("#blog_form").submit(function () {
                title=false;
                body=false;

                check_title();
                check_body();

                if(title==false && body==false){

                    return true;
                }
                else {
                    return false;


                }


            });









        });

    </script>

        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>



@endsection
