@extends('Frontend.master')
@section('title')
    Monosheba -  Contact Us
@endsection
@section('content')
    <div class="crumbs-area" style="height: 220px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="banner-content">
                        <h3>Contact us</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="crumbs">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><span>Contact</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area start -->
    <div class="appoinment-area ptb--50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appoinment-form ">

                        <form action="{{url('/contactus')}}" method="post" id="user_contact_form">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" id="c_name"required placeholder="Name here">
                                    <input type="email" name="email" id="c_email"required placeholder="Email here">
                                    <input type="text" name="phone" id="c_phone"required placeholder="Phone here">
                                    <input type="text" name="address" id="c_address"required placeholder="Address here">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="subject" id="c_subject"required placeholder="Subject here">
                                    <textarea name="description" id="c_msg"required placeholder="Message here"></textarea>
                                    <input type="submit" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
    @endsection