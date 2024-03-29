@extends('layouts.app')
@section('title')
    <title>@lang("Video") | O'zBRU</title>
@endsection
@section('language')
    <li>
        <a href="{{route('videos', 'en') }}"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
    </li>
    <li>
        <a href="{{route('videos', 'ru') }}"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
    </li>
    <li>
        <a href="{{route('videos', 'uz') }}"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
    </li>
@endsection
@section('mob-lang')
<a href="{{route('videos', 'en') }}" style="color: white;"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
<a href="{{route('videos', 'ru') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
<a href="{{route('videos', 'uz') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
@endsection
@section('content')
<section class="no-padding sh-about">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("Video")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             <li>
                <a href="javascript:void()">@lang("Media")</a>
             </li>
             <li class="active">@lang("Video")</li>
         </ol>
    </div>
</section>
    
<section>
    <div class="container">
        <div class="row">
            <div class="news-list-warp">
                @foreach ($videos as $item)
                <div class="col-md-6">
                    <div class="item-new-list grid-new">
                    <div class="feature-new-warp">
                        <img src="/storage/{{$item->image1}}" alt="Image">
                        <a href="{{$item->link}}" class="popup-youtube">
                            <img src="/images/About/Play.png" class="img-responsive btn-play-new" alt="Image">
                        </a>
                    </div>
                    <div class="box-new-info">
                        <div class="new-info">
                            <h4>
                                <a href="single_new.html">{{$item->title}}</a>
                            </h4>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i>{{$item->created_at->format('d')}}
                                @if ($item->created_at->format('m') == 1)
                                    @lang("Jan")
                                @endif
                                @if ($item->created_at->format('m') == 2)
                                    @lang("Feb")
                                @endif
                                @if ($item->created_at->format('m') == 3)
                                    @lang("Mar")
                                @endif
                                @if ($item->created_at->format('m') == 4)
                                    @lang("Apr")
                                @endif
                                @if ($item->created_at->format('m') == 5)
                                    @lang("May")
                                @endif
                                @if ($item->created_at->format('m') == 6)
                                    @lang("Jun")
                                @endif
                                @if ($item->created_at->format('m') == 7)
                                    @lang("Jul")
                                @endif
                                @if ($item->created_at->format('m') == 8)
                                    @lang("Aug")
                                @endif
                                @if ($item->created_at->format('m') == 9)
                                    @lang("Sep")
                                @endif
                                @if ($item->created_at->format('m') == 10)
                                    @lang("Oct")
                                @endif
                                @if ($item->created_at->format('m') == 11)
                                    @lang("Nov")
                                @endif
                                @if ($item->created_at->format('m') == 12)
                                    @lang("Dec")
                                @endif,
                                {{$item->created_at->format('Y')}}</p>
                                @if ($item->author)
                                    <p><i class="fa fa-user" aria-hidden="true"></i>{{$item->author}}</p>
                                @else 
                                    <p><i class="fa fa-user" aria-hidden="true"></i>@lang("By Admin")</p>
                                @endif
                            
                        </div>
                        <div class="tapo">
                            <p>{!!$item->body!!}</p>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach	
                
               		
                    
                </div>	
            </div>
        </div>
    </div>
</section>
@endsection