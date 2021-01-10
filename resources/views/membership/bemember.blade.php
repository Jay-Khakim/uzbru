@extends('layouts.app')
@section('title')
    <title>@lang("Membership") | O'zBRU</title>
    
@endsection
@section('language')
    <li>
        <a href="{{route('bemember', 'en') }}"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
    </li>
    <li>
        <a href="{{route('bemember', 'ru') }}"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
    </li>
    <li>
        <a href="{{route('bemember', 'uz') }}"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
    </li>
@endsection
@section('mob-lang')
<a href="{{route('bemember', 'en') }}" style="color: white;"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
<a href="{{route('bemember', 'ru') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
<a href="{{route('bemember', 'uz') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
@endsection
@section('content')
<section class="no-padding sh-company-history">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("Membership")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             <li class="active">@lang("Membership")</li>
         </ol>
    </div>
</section>
<!-- /Sub HEader -->

<section class="bg-quote-h3">
    <div class="quote-inner quote-inner-h3">
        <p>@lang("<span>Join</span> the Business Development Association of Uzbekistan")</p>
        <a href="#" class="ot-btn btn-border-dark-color">@lang("Become a member")</a>
    </div>
</section>
@endsection