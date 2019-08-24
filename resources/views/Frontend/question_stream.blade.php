@extends('Frontend.master')
@section('title')
    Monosheba - Question Stream
@endsection
@section('content')

    <div class="crumbs-area" style="height: 220px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="banner-content">
                        <h3>Question Stream</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="crumbs">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><span>Question Stream</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- blog area start -->
<div class="blog-area ptb--100">
    <div class="container">
        <div class="row">
            <!-- blog details left  start-->

            <div class="col-lg-8">
                @foreach($qans as $ans)
                <div class="single-blog">
                    <div class="blog-content">
                        <div class="blog-meta">
                            <div class="meta-date">
                                <span>{{ $ans->created_at->format('M') }}</span>
                                <h4>{{ $ans->created_at->format('j') }}</h4>
                            </div>
                            <div class="meta-title">
                                <h2 ><a  href="{{url('/question-view/'.$ans->id)}}">{{$ans->question}}</a></h2>
                            </div>
                        </div>
                        <span class="blog-submeta">
                           <p>Question ID:{{$ans->qsn_id}}</p>
                            @if($ans->updated_at == null)
                            @else
                                BY ADMIN &nbsp;
                                {{ $ans->updated_at->format('M j, Y') }}
                            @endif

                        </span>
                        <p>{!!$ans->answer!!}</p>


                    </div>
                    <div class="blog-btm-meta">
                        <ul class="blg-likes">
                            {{--<li><a href="#"><i class="icofont icofont-heart"></i> <span>12</span></a></li>--}}
                            <li><a href="{{url('/question-view/'.$ans->id)}}"><i class="icofont icofont-speech-comments"></i> <span>Comment</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- comments area end -->
                {{--<div class="comment-area">--}}
                    {{--<div class="comment-title">--}}
                        {{--<h4>Visitor Comments <span>(03)</span></h4>--}}
                    {{--</div>--}}
                    {{--<ul class="comment-list">--}}
                        {{--<li class="comment-info-inner">--}}
                            {{--<article>--}}
                                {{--<div class="comment-content">--}}
                                    {{--<div class="meta-data">--}}
                                        {{--<h2>Luisiana garcias</h2>--}}
                                        {{--<p class="category">Category : <span>Apartment</span></p>--}}
                                    {{--</div>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam...</p>--}}
                                {{--</div>--}}
                            {{--</article>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<!-- comments area end -->--}}
                {{--<!-- leave comments area start -->--}}
                {{--<div class="leave-comment">--}}
                    {{--<div class="comment-title">--}}
                        {{--<h4>Leave a Comments</h4>--}}
                    {{--</div>--}}
                    {{--<div class="cmnt-box">--}}
                        {{--<form action="#" id="contact-form">--}}
                            {{--<textarea name="msg" id="message" placeholder="Message"></textarea>--}}
                            {{--<input value="send message" id="comment-submit" type="submit">--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- leave comments area end -->--}}
                @endforeach
                    {{ $qans->links() }}
            </div>


            <!-- blog details left  end-->
                    <!-- letest post area start -->
                    <div class="widget widget-letest-post">
                        <h2 class="widget-title">Letest Question</h2>
                        @foreach($qsn as $qsn)
                        <div class="letest-post">
                            <div class="lts-post">
                                <div class="lts-content">
                                    <h2><a href="{{url('/question-view/'.$qsn->id)}}"> {!! substr(strip_tags($qsn->question), 0, 45)  !!}</a></h2>
                                    <span class="published-date">{{$qsn->created_at->format('M j,Y')}}</span>
                                    <pre>

                                    </pre>
                                </div>
                            </div>

                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
            <!-- sidebar area  end-->
        </div>
    </div>
</div>
   @endsection