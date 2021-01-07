@extends('layouts.app')
@section('title')
<title>@lang("News") | O'zBRU</title>
@endsection
@section('content')
<section class="no-padding sh-news">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>{{$single->title}}</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             <li>
                 <a href="{{route('news', app()->getLocale())}}"> @lang("News")</a>
             </li>
             <li class="active"> @lang("More")</li>
         </ol>
    </div>
</section>
<!-- /subheader -->
<section>
    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <div class="news-list-warp">
                
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="item-new-list grid-new">
                    <div class="feature-new-warp">
                        <div id="feature-gallery-post" class="owl-feature-gallery-post">
                            <div class="item-feature-img" >
                                <a href="javascript:void()"><img src="/storage/{{$single->image1}}" alt="Image"></a>	
                            </div>
                            <div class="item-feature-img" >
                                <a href="javascript:void()"><img src="/storage/{{$single->image2}}" alt="Image"></a>	
                            </div>
                            <div class="item-feature-img" >
                                <a href="javascript:void()"><img src="/storage/{{$single->image3}}" alt="Image"></a>	
                            </div>
                            <div class="item-feature-img" >
                                <a href="javascript:void()"><img src="/storage/{{$single->image4}}" alt="Image"></a>	
                            </div>
                        </div>
                    </div>
                </div>						
            </div>
            <div class="col-md-1"></div>	
        </div>
    </div>
</section>
<section>
    <div class="container" style="margin-top: -40px;">
        <div class="row">
            <div class="col-md-12">
                <div class="new-detail-warp">
                    <div class="new-info new-info-detail">
                        <h4>
                            <a href="single_new.html">{{$single->title}}</a>
                        </h4>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i>{{$single->created_at->format('d')}}
                            @if ($single->created_at->format('m') == 1)
                                @lang("Jan")
                            @endif
                            @if ($single->created_at->format('m') == 2)
                                @lang("Feb")
                            @endif
                            @if ($single->created_at->format('m') == 3)
                                @lang("Mar")
                            @endif
                            @if ($single->created_at->format('m') == 4)
                                @lang("Apr")
                            @endif
                            @if ($single->created_at->format('m') == 5)
                                @lang("May")
                            @endif
                            @if ($single->created_at->format('m') == 6)
                                @lang("Jun")
                            @endif
                            @if ($single->created_at->format('m') == 7)
                                @lang("Jul")
                            @endif
                            @if ($single->created_at->format('m') == 8)
                                @lang("Aug")
                            @endif
                            @if ($single->created_at->format('m') == 9)
                                @lang("Sep")
                            @endif
                            @if ($single->created_at->format('m') == 10)
                                @lang("Oct")
                            @endif
                            @if ($single->created_at->format('m') == 11)
                                @lang("Nov")
                            @endif
                            @if ($single->created_at->format('m') == 12)
                                @lang("Dec")
                            @endif,
                            {{$single->created_at->format('Y')}}</p>
                            @if ($single->author)
                                <p><i class="fa fa-user" aria-hidden="true"></i>{{$single->author}}</p>
                            @else 
                                <p><i class="fa fa-user" aria-hidden="true"></i>@lang("By Admin")</p>
                            @endif
                    </div>
                    <div class="content-detail content-new-detail">
                        <p>{!!$single->body!!}</p>
                    </div>
                </div>
                <div class="footer-post">
                    {{-- url()->current() --}}
                    <ul class="widget-footer-social-1 footer-post-share social-hover-defaul">
                        <li><a class="facebook" target="_blank" href="https://www.facebook.com/sharer.php?u={{url()->current()}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        {{-- <li><a class="instagram" target="_blank" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> --}}
                        <li><a class="telegram" target="_blank" href="https://telegram.me/share/url?url={{url()->current()}}"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
                        <li><a class="linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?url={{url()->current()}}&title={{$single->title}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Main New Detail -->

{{--
    Facebook: 

    https://www.facebook.com/sharer.php?u=[post-url]

    Telegram: 
    https://telegram.me/share/url?url={{url()->current()}}
    https://telegram.me/share/url?url=https%3A%2F%2Fkun.uz%2F73615609%20%D0%91%D0%B8%D1%80%20%D0%B2%D0%B0%D0%B7%D0%B8%D1%80%20%D0%B8%D1%88%D0%B4%D0%B0%D0%BD%20%D0%BA%D0%B5%D1%82%D0%B4%D0%B8%2C%20%D0%B8%D0%BA%D0%BA%D0%B8%D0%BD%D1%87%D0%B8%D1%81%D0%B8%20%D0%B6%D0%B8%D0%B4%D0%B4%D0%B8%D0%B9%20%D0%BE%D0%B3%D0%BE%D2%B3%D0%BB%D0%B0%D0%BD%D1%82%D0%B8%D1%80%D0%B8%D1%88%20%D0%BE%D0%BB%D0%B4%D0%B8
    
    LinkedIn


    https://www.linkedin.com/shareArticle?url=[post-url]&title=[post-title]

    --}}


@endsection