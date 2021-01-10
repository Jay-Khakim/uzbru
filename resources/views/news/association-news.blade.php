@extends('layouts.app')
@section('title')
<title>@lang("Association News") | O'zBRU</title>
@endsection
@section('language')
    <li>
        <a href="{{route('association-news', 'en') }}"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
    </li>
    <li>
        <a href="{{route('association-news', 'ru') }}"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
    </li>
    <li>
        <a href="{{route('association-news', 'uz') }}"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
    </li>
@endsection
@section('mob-lang')
<a href="{{route('association-news', 'en') }}" style="color: white;"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
<a href="{{route('association-news', 'ru') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
<a href="{{route('association-news', 'uz') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
@endsection
@section('content')
<section class="no-padding sh-news">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("News")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             
             <li class="active"> @lang("News")</li>
         </ol>
    </div>
</section>
<!-- /subheader -->
    
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="news-list-warp">
                    @foreach ($news as $single)
                    <div class="item-new-list "> <!-- add class no-position --> 

                        <div class="feature-new-warp">
                            <a href="{{route('single-news', [app()->getLocale(), $single->id])}}">
                                <img src="/storage/{{$single->image1}}" alt="Image">
                            </a>
                        </div>
                        <div class="box-new-info">
                            <div class="new-info">
                                <h4>
                                    <a href="{{route('single-news', [app()->getLocale(), $single->id])}}">{{$single->title}}</a>
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
                            <div class="tapo">
                                <p>
                                    @php
                                    if(strlen($single->body)> 159){
                                        echo substr($single->body, 0, 150)."...";
                                    }else {
                                        echo $single->body;
                                    }  
                                    @endphp      
                                </p>
                            </div>
                            <a href="{{route('single-news', [app()->getLocale(), $single->id])}}" class="ot-btn btn-sub-color">@lang("Read More")</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{$news->links()}}
        </div>
    </div>
</section>
@endsection