@extends('layouts.app')
@section('title')
    <title>@lang("Photos") | O'zBRU</title>
@endsection
@section('language')
    <li>
        <a href="{{route('photos', 'en') }}"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
    </li>
    <li>
        <a href="{{route('photos', 'ru') }}"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
    </li>
    <li>
        <a href="{{route('photos', 'uz') }}"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
    </li>
@endsection
@section('mob-lang')
<a href="{{route('photos', 'en') }}" style="color: white;"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
<a href="{{route('photos', 'ru') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
<a href="{{route('photos', 'uz') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
@endsection
@section('content')
<section class="no-padding sh-about">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("Photos")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             <li>
                 <a href="javascript:void()">@lang("Media")</a>
             </li>
             <li class="active">@lang("Photos")</li>
         </ol>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">

            {{-- <div class="category-case-warp category-case-warp-h5 category-case-warp-page">
            </div> --}}

            <div class="cases-warp cases-warp-h5 cases-warp-page">
                @foreach ($photos as $item)
                    <div class="element-item Tokyo Funds">
                        <div class="item-project">
                            <img src="/storage/{{$item->image1}}" class="img-responsive" alt="Image">
                            <div class="overlay-project">
                                <h4><a href="javascript:void()">{{$item->title}}</a></h4>
                                <a class="cate" href="javascript:void()">{{$item->body}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                
            </div>
            {{-- <div class="col-md-12 text-center">
                <a href="#" class="ot-btn btn-main-color" >Load More</a>
            </div> --}}
            {{$photos->links()}}
        </div>
    </div>
</section>
<!-- /Cases -->
@endsection