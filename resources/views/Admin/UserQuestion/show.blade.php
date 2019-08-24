@extends('Admin.master')
@section('title')
    Monosheba User Question Details
@endsection
@section('uqsnmenu')
    active
@endsection
@section('uqsnshow')
    active
@endsection
@section('content')

    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                 User  Question
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="">User Question</a></li>
                    <li class="active"><a href="{{url('admin/question')}}">User Question Details</a></li>
                </ol>

                <div class="alert alert-success alertdiv">
                    <strong>Action !</strong> Sucess .
                </div>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="table-responsive">
                                <table id="example1" class="table">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Question</th>
                                        <th>Question <br> Date & Time </th>
                                        <th>Answer</th>
                                        <th>Answer <br> Date & Time </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($question as $questions)
                                        <tr id="tr_{{$questions->id}}">
                                            <td>{{ $no++ }}</td>
                                            <td>{{$questions->question}}</td>
                                            <td>{{$questions->created_at}}</td>
                                            <td>{{$questions->answer}}</td>
                                            <td>{{$questions->updated_at}}</td>
                                            <td>
                                                <a href="{{url('admin/userquestions',[$questions->id,'edit'])}}" class="btn btn-primary btn-sm edit">
                                                    @if($questions->answer == null)
                                                       Answer
                                                        @else
                                                        <span class="glyphicon glyphicon-edit"></span>

                                                    @endif
                                                </a>
                                                <a class="btn btn-danger btn-sm delete" id="{{$questions->id}}" data-token="{{ csrf_token() }}"> <span class="glyphicon glyphicon-trash"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
            <!-- /.content -->
        </div>
    </div>




@endsection

@section('page-js-script')
    <script>
        $(function () {
            $('#example1').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
    <script>
        $(".alertdiv").hide();
        $(document).on('click',".delete",function(){
            var id  = $(this).attr('id');
            var token = $(this).data("token");
            var tablerow= $('#tr_'+id);
            var url ="userquestions"+"/"+id;
            if(confirm("Are you sure?")){
                $.ajax({
                    url:url,
                    type: "DELETE",
                    asynce:false,
                    data: {"id": id, "_token": token,},
                    dataType: "JSON",
                    success: function(){
                        tablerow.remove();
                        $(".alertdiv").show();
                        $(".alertdiv").delay(2000).fadeOut('slow');
                    }
                });

            }
        });

    </script>

@stop