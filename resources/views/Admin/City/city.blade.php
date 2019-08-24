@extends('Admin.master')
@section('title')
    Monosheba - City Details
@endsection
@section('citydetails')
    active
@endsection
@section('content')

    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    City Details
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="">City</a></li>
                    <li class="active"><a href="{{url('admin/city')}}">City Details</a></li>
                </ol>

                <div class="alert alert-success alertdiv">
                    <strong>Action !</strong> Sucess .
                </div>
            </section>
            <section class="content-header">
                <div class="row">
                    <div class="col-xs-12">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                            Add New City
                        </button>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="table-responsive">
                                <table class="table" id="example1">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Cities Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($city as $cities)
                                        <tr id="tr_{{$cities->id}}">
                                            <td>{{ $no++ }}</td>
                                            <td>{{$cities->name}}</td>
                                            <td>
                                                <a id="{{$cities->id}}" class="btn btn-primary btn-sm edit" data-token="{{ csrf_token() }}" data-toggle="modal" data-target="#modal-edit"><span class="glyphicon glyphicon-edit"></span></a>
                                                <a class="btn btn-danger btn-sm delete" id="{{$cities->id}}" data-token="{{ csrf_token() }}"> <span class="glyphicon glyphicon-trash"></span></a>
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


    {{--Add city--}}
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add New City</h4>
                </div>

                <form method="POST" id="city_add_form" action="{{url('admin/add-city')}}">
                    {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">City Name</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="city_name" placeholder="City Name" name="name">
                            <span  id=err_city style="color:red;"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- / Edit modal -->
    @if(isset($cities->id))
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit City</h4>
                </div>

                <form method="POST" id="city_edit_form" action="{{url('admin/edit-city/'.$cities->id)}}">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputlast_name" class="col-sm-2 control-label">City Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cityname"  name="name">
                                <span  id=err_city_edit style="color:red;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="cancel" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endif
@endsection

@section('page-js-script')
    <script>
        $(function () {
            $('#example1').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            })
        })
        </script>
    <script>
        $(".alertdiv").hide();
        $(document).on('click',".delete",function(){
            var id  = $(this).attr('id');
            var token = $(this).data("token");
            var tablerow= $('#tr_'+id);
            var url ="delete-city"+"/"+id;
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

    <script>
        $(document).on('click',".edit",function(){
            var id  = $(this).attr('id');
            var token = $(this).data("token");
            var url ="show-edit-city"+"/"+id;
                $.ajax({
                    url:url,
                    type: "get",
                    asynce:false,
                    data: {"id": id, "_token": token,},
                    dataType: "JSON",
                    success: function(result){
                        $("#cityname").val(result);

                    }
                });


        });

    </script>
    <script>
        $(document).ready(function(){

            $('#city_name').on('input', function() {
                check_city();
            });
            $('#cityname').on('input', function() {
                check_city_edit();
            });
            var city;
            var city_edit;
            function check_city(){
                if($('#city_name').val()==''){
                    $('#err_city').html("Require city name");
                    $('#err_city').show();
                    city = true;
                    return false;
                }
                else{
                    $('#err_city').hide();
                    return true;

                }
            }
            function check_city_edit(){
                if($('#cityname').val()==''){
                    $('#err_city_edit').html("Require city name");
                    $('#err_city_edit').show();
                    city_edit = true;
                    return false;
                }
                else{
                    $('#err_city_edit').hide();
                    return true;
                }
            }
            $("#city_edit_form").submit(function () {
                city_edit=false;
                check_city_edit();
                if(city_edit==false ){

                    return true;
                }
                else {
                    return false;
                }
            });

            $("#city_add_form").submit(function () {
                city=false;
                check_city();
                if(city==false ){

                    return true;
                }
                else {
                    return false;
                }

            });
        });
    </script>
@stop