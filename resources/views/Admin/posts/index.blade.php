
@extends('Admin.master')

@section('title')
    Monosheba blog
@endsection
@section('blogmenu')
    active
@endsection
@section('showblog')
    active
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                All Publish Blog Posts

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="">post</a></li>
                <li class="active">All post</li>
            </ol>
            @if($no==1)
                <?php $no++; ?>
            <div class="alert alert-success alertdiv">
               Action <strong>Success!!</strong>
            </div>






            @endif
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="panel-body">
                    <a href="{{ url('/admin/posts/create') }}" class="btn btn-success btn-sm" title="Add New post">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Post
                    </a>




                </div>

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>sl</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>writer</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $item)
                                <tr>
                                    <td>{{ $loop->iteration or $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->body }}</td>
                                    <td>{{ $item->writer }}</td>
                                    <td>
                                        <a href="{{ url('/admin/posts/' . $item->id) }}" title="View post"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                        <a href="{{ url('/admin/posts/' . $item->id . '/edit') }}" title="Edit post"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                        <form method="POST" action="{{ url('/admin/posts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-xs" title="Delete post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

    
@endsection
@section('page-js-script')

    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {

            $('#example1').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
    <script>
        $(".alertdiv").delay(800).fadeOut('slow');
    </script>

@endsection
