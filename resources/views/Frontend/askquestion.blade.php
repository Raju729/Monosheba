@extends('Frontend.master')
@section('title')
    Monosheba - Ask Monosheba
@endsection
@section('content')
    <!-- euestion action area start -->
    <div class="crumbs-area" style="height: 220px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="banner-content">
                        <h3>Ask Monosheba</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="crumbs">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><span>Ask Monosheba</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="askquestion-action ptb--100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" id="notify" action="{{url('ask-question')}}">
                        {{ csrf_field() }}
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center" style="margin-top: 100px">
                                    <div class="text-center">
                                        <h2 style="color: #03a9f5">নির্ভয়ে খুলে বলুন মনের কথা,<br>পরামর্শ নিন এখনি...</h2>
                                    </div>

                                        <textarea class="form-control form-field" name="question" placeholder="আপনার কথা লিখুন" rows="2" required></textarea>
                                        <input type="hidden" value="{{$final_id}}" name="qsn_id">

                                        <div class="btn-style-one">
                                            <button type="submit" class="btn btn-info btn-lg" >
                                                 পাঠিয়ে দিন</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('page-js-script')
    <script>
        $("#notify").submit(function () {
            $.notify("আনপার প্রশ্নটি আমরা গ্রহন করেছি, প্রশ্ন করার জন্য আপনাকে ধন্যবাদ","success");
        });
    </script>
@endsection