@extends('Frontend.master')
@section('title')
   Monosheba - Blog
@endsection
@section('content')

    <!-- blog area start -->

    <div class="crumbs-area"style="height:220px ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="banner-content">
                        <h3>Our Blog</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="crumbs">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><span>Blog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="blog-area ptb--100">
    <div class="container">
        <div class="row">
            @foreach($posts as $item)

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-thumbnail">
                        {{--<a href="blog-details.html"><img src="assets/img/blog/blog-img1.jpg" alt="doctor blog"></a>--}}
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <div class="meta-title">
                                <h2><a href="">{{ $item->title }}</a></h2>
                            </div>
                            <div class="meta-date">
                                <span>

                                    {{ $item->created_at->format('M j, Y') }}</span>

                            </div>
                            <div class="meta-title">

                            </div>
                        </div>
                        <span class="blog-submeta">BY- {{ $item->writer }}</span>
                        <p >
                            {!! substr(strip_tags($item->body), 0, 300)  !!}
                            @if(strlen(strip_tags($item->body )) > 50)
                              <br>  <a href="{{'show-blog/'.$item->id}}" class="btn btn-success btn-sm show " title="show full post"><span style="color: white">read more..</span></a>
                        @endif
                            </p>

                    </div>
                </div>
            </div>
                @endforeach


    </div>

        {{ $posts->links() }}

    </div>
</div>

<!-- blog area end -->
@endsection
@section('page-js-script')

    @endsection