@extends('Frontend.master')
@section('title')
    Monosheba - About Us
@endsection
@section('content')

    <!-- banner area start -->
    <div class="crumbs-area" style="height: 220px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="banner-content">
                        <h3>About Us</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="crumbs">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><span>About Us</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->
    <!-- about us two area start -->
    <div class="about-us-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="abt-two-content">
                        <h2>Little About Us</h2>
                    <P style="text-align: justify">Monosheba First ever online Platform (App and Website) for mental health services in Bangladesh. Anyone can find psychologist, psychiatrist, counselor and mental health professionals instantly. And the assessment tools help the user to assess their anxiety, depression, OCD (Obsessive-compulsive Disorder) and General psychological well-being. And it's free ! You can call us for any psychological help or counseling.</P><br>
                        <h2>About Founder:</h2>
                        <p style="text-align: justify">
                        Jesmin Akter, the founder of www.monosheba.com has her expertise in clinical
                        psychology. She is interested in working with women and children who experience
                        violence in their lifetimes. She was a Psycho-social counselor at the national trauma
                        center in Bangladesh to improve the psychological well-being of victims. She
                        acquires her knowledge and expertise to work through different organization and
                        hospital. Now she is doing her doctoral program in I/O and Business Psychology and
                        interested to research on working women’s mental health issue.
                    </p>
                    </div>
                </div>
                <div class="col-md-5 d-none d-lg-block">
                    <div class="abt-two-thumb">
                        <img src="{{asset('assets/asset_front/img/icon/logo.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us two area end -->
@endsection