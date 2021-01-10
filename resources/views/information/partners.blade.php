@extends('layouts.app')
@section('title')
<title>@lang("Partners") | O'zBRU</title>
@endsection
@section('language')
    <li>
        <a href="{{route('partners', 'en') }}"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
    </li>
    <li>
        <a href="{{route('partners', 'ru') }}"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
    </li>
    <li>
        <a href="{{route('partners', 'uz') }}"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
    </li>
@endsection
@section('mob-lang')
<a href="{{route('partners', 'en') }}" style="color: white;"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
<a href="{{route('partners', 'ru') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
<a href="{{route('partners', 'uz') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
@endsection
@section('content')
    	
<section class="no-padding sh-about">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("Partners")</h3>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
            </li>
            <li>
               <a href="javascript:void()">@lang("Information")</a>
            </li>
            <li class="active">@lang("Partners")</li>
        </ol>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="partner-list">
                {{-- {{dd($partners)}} --}}
                @foreach ($partners as $item)
                    <div class="item-partner-list">
                        <div class="col-md-3">
                            <a href="javascript:void()"><img src="/storage/{{$item->image}}" class="img-responsive" alt="Image"></a>
                        </div>
                        <div class="col-md-9">
                            <h4><a href="{{$item->web}}">{{$item->name}}</a></h4>
                            <p><span class="pull-left">{{$item->field}}</span> <span class="pull-right">{{$item->address}}</span></p>
                            <p>{!!$item->desc!!}</p>
                            <a href="{{$item->web}}" target="_blank" class="ot-btn btn-sub-color">@lang("Visit Website")</a>
                        </div>
                    </div> 
                @endforeach
                
            </div>
            {{-- <div class="col-md-12 text-center">
                <ul class="pagination">
                    <li><a href="#">PREVIOUS</a></li>
                    <li><a href="#">NEXT</a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</section>
@endsection