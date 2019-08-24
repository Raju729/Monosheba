@extends('Admin.master')
@section('title')
    Monosheba Psychiatric Details
@endsection
@section('psymenu')
    active
@endsection
@section('showpsy')
    active
@endsection
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Psychiatric Details
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{url('admin/show-Psychiatrict')}}">Psychiatric</a></li>
                    <li class="active">Psychiatric Details</li>
                </ol>

                <div class="alert alert-success alertdiv">
                    <strong>Action !</strong> Sucess .
                </div>
            </section>
            <section class="content-header">
                <div class="row">
                    <div class="col-xs-12">

                        <a href="{{url('admin/city')}}">
                            <button type="button" class="btn btn-success">Add New City</button>
                        </a>
                    </div>
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
                                        <th>Cities Name</th>
                                        <th>Psychiatric Name</th>
                                        <th>Phone Number</th>
                                        <th>Speciality</th>
                                        <th>Designation</th>
                                        <th>Job Location</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($psychiatric as $psychiatrics)
                                        <tr id="tr_{{$psychiatrics->id}}">
                                            <td>{{ $no++ }}</td>
                                            <td>{{$psychiatrics->city}}</td>
                                            <td>{{$psychiatrics->name}}</td>
                                            <td>{{$psychiatrics->phone_no}}</td>
                                            <td>{{$psychiatrics->speciality}}</td>
                                            <td>{{$psychiatrics->designation}}</td>
                                            <td>{{$psychiatrics->joblocation}}</td>
                                            <td>
                                                <a href="{{url('admin/show-Psychiatrict-edit').'/'.$psychiatrics->id}}" class="btn btn-primary btn-sm edit"><span class="glyphicon glyphicon-edit"></span></a>
                                                <a class="btn btn-danger btn-sm delete" id="{{$psychiatrics->id}}" data-token="{{ csrf_token() }}"> <span class="glyphicon glyphicon-trash"></span></a>
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
    <!-- ./wrapper -->
    <!-- /Insert modal -->
@endsection

@section('page-js-script')

    <!-- SlimScroll -->

    <!-- page script -->
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
            var url ="delete-Psychiatrict"+"/"+id;
            if(confirm("Are you sure?")){
                $.ajax({
                    url:url,
                    type: "get",
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

    <

@stop