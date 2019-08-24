@extends('Admin.master')
@section('title')
    Monosheba Contact message form user
@endsection
@section('contct')
    active
@endsection
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Contact Messages from User
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="">Contact</a></li>
                    <li class="active"><a href="">Contact message</a></li>
                </ol>

                <div class="alert alert-success alertdiv">
                    <strong>Action !</strong> Sucess .
                </div>
            </section>
            <section class="content-header">
                <div class="row">
                    <div class="col-xs-12">

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
                                    <tr ><td>SL</td>
                                        <th>User Name</th>
                                        <th>User Phone</th>
                                        <th>User Email</th>
                                        <th>User Address</th>
                                        <th>Problem Subject</th>
                                        <th>Problem Details</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contact as $contact)
                                        <tr id="tr_{{$contact->id}}">
                                            <td>{{ $no++ }}</td>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->phone}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->address}}</td>
                                            <td>{{$contact->subject}}</td>
                                            <td>{{$contact->description}}</td>
                                            <td>
                                                <a id="{{$contact->id}}" class="btn btn-primary btn-sm edit" data-token="{{ csrf_token() }}" data-toggle="modal" data-target="#modal-edit"><span class="glyphicon glyphicon-edit"></span></a>
                                                <a class="btn btn-danger btn-sm delete" id="{{$contact->id}}" data-token="{{ csrf_token() }}"> <span class="glyphicon glyphicon-trash"></span></a>
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


    <!-- / Edit modal -->
    @if(isset($contact->id))
        <div class="modal fade" id="modal-edit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">ব্যাবহারকারীর বার্তা</h4>
                    </div>

                        <div class="modal-body">

                                <div class="col-md-6" style="background-color: #f7e1b5">
                                    <table>
                                        <tr>
                                            <td>প্রেরকের নামঃ</td>
                                            <td><p id="name"></p></td>
                                        </tr>
                                        <tr>
                                            <td>প্রেরকের ইমেইলঃ</td>
                                            <td><p id="email"></p></td>
                                        </tr>
                                        <tr>
                                            <td>প্রেরকের নম্বরঃ</td>
                                            <td><p id="numberr"></p></td>
                                        </tr>
                                        <tr>
                                            <td>প্রেরকের ঠিকানাঃ</td>
                                            <td><p id="address"></p></td>
                                        </tr>
                                    </table>
                                </div>
                            <div class="col-md-6"style="background-color:rgba(255,153,211,0.49)">
                                <div  class="col-md-12"style="background-color: rgba(54,255,78,0.44)">
                                    <fieldset>
                                        <legend>সমস্যার শিরোনাম:</legend>
                                        <b><p id="subject"></p></b>
                                    </fieldset>

                                </div>
                                <div  class="col-md-12"style="background-color: rgba(170,255,35,0.52);margin-top: 1%">
                                    <fieldset>
                                        <legend>সমস্যার বর্ণনা:</legend>
                                        <p id="description"></p>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="cancel" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
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
            var url ="contact-delect"+"/"+id;
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
            var url ="contact-view"+"/"+id;
            $.ajax({
                url:url,
                type: "get",
                asynce:false,
                data: {"id": id, "_token": token,},
                dataType: "JSON",
                success: function(result){
                    $("#name").html(result['name']);
                    $("#email").html(result['email']);
                    $("#numberr").html(result['phone']);
                    $("#address").html(result['address']);
                    $("#subject").html(result['subject']);
                    $("#description").html(result['description']);

                }
            });


        });

    </script>

@stop