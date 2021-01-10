@extends('layouts.app')
@section('title')
<title>@lang("FAQ") | O'zBRU</title>
@endsection
@section('language')
    <li>
        <a href="{{route('faq', 'en') }}"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
    </li>
    <li>
        <a href="{{route('faq', 'ru') }}"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
    </li>
    <li>
        <a href="{{route('faq', 'uz') }}"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
    </li>
@endsection
@section('mob-lang')
<a href="{{route('faq', 'en') }}" style="color: white;"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
<a href="{{route('faq', 'ru') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
<a href="{{route('faq', 'uz') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
@endsection
@section('content')
<section class="no-padding sh-company-history">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("FAQ")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             <li>
                <a href="javascript:void()">@lang("Information")</a>
             </li>
             <li class="active">@lang("FAQ")</li>
         </ol>
    </div>
</section>
<!-- /Sub HEader -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group accordion-1" id="accordion">
                      <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    @lang("How to become a member of the Business Development Association of Uzbekistan?")
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                              <div class="panel-body">
                                @lang("The association accepts all local businesses as members. The organization is funded by membership fees!")
                              </div>
                            </div>
                      </div>
                      <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                   @lang("What opportunities are provided by the Association?")
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                                @lang("The association will provide practical assistance in overcoming any obstacles to the development of your business. If you want to expand your business, you will also have the opportunity to work with foreign investors by joining the association. Investors will be provided with a number of benefits through cooperation in the implementation of their projects in Uzbekistan. Most importantly, everything is reliable and useful")
                              </div>
                            </div>
                      </div>
                      <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    @lang("Are the cooperating investors confident?")
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse in">
                              <div class="panel-body">
                                @lang("The Uzbekistan Business Development Association not only studies the proposed projects of foreign investors, but also their activities, partners and status abroad. After all, we are in favor of reliable and honest cooperation!")
                              </div>
                            </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection