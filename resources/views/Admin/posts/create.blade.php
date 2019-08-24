@extends('Admin.master')
@section('title')
    Monosheba Create Blog
@endsection
@section('blogmenu')
    active
@endsection
@section('addblog')
    active
@endsection
@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Your Post
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="{{url('admin/posts')}}">post</a></li>
                <li class="active">create post</li>
            </ol>

        </section>

        <!-- Main content -->
        <div class="container">
            <div class="row">


                <div class=" col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Create New post</div>
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

                            <form method="POST" action="{{ url('/admin/posts') }}" id="blog_form" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                @include ('Admin.posts.form')



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
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

    <script src="{{asset('assets/js/ckeditor.js')}}"></script>

    {{--<script src="{{asset('Assets/js/bootstrap3-wysihtml5.all.min.js')}}"></script>--}}

    <script>

        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>


    <script>
        $(document).ready(function(){



            $('#title').on('input', function() {
                check_title();

            });

            $('#body').on('input', function() {
                check_body();

            });




            var title;
            var body;


            function check_title(){
                if($('#title').val()==''){
                    $('#title_error').html("Require Blog Title?");
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
                if($('#body').val()==''){
                    $('#body_error').html("Require Blog Body");
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


@endsection



