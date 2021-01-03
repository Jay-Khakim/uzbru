@extends('layouts.app')
@section('title')
    <title>@lang("Membership") | O'zBRU</title>
    
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