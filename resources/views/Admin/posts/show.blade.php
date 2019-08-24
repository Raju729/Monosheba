@extends('Admin.master')
@section('title')
    Mososheba Blog
@endsection
@section('blogmenu')
    active
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Blog single view
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="{{url('admin/posts')}}">post</a></li>
                <li class="active"> Show Post</li>
            </ol>
        </section>

        <!-- Main content -->
        <div class="container">
            <div class="row">


                <div class=" col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">post {{ $post->id }}</div>
                        <div class="panel-body">

                            <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                            <a href="{{ url('/admin/posts/' . $post->id . '/edit') }}" title="Edit post"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('admin/posts' . '/' . $post->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-xs" title="Delete post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                            <br/>
                            <br/>

                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr><th> Title </th><td> {{ $post->title }} </td></tr><tr><th> Body </th><td>{!! $post->body   !!}  </td></tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>


@endsection
