@extends('layouts.app')
@section('title')
<title>@lang("History") | O'zBRU</title>

@endsection
@section('content')
<section class="no-padding sh-company-history">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("Association history")</h3>
        <ol class="breadcrumb">
             <li>
                 <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             <li class="active">@lang("Association history")</li>
         </ol>
    </div>
</section>
<!-- /Sub HEader -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="main-page">
                    <div class="history-timeline-h-warp">
                        <div class="timeline-centered">
                            <article class="timeline-entry">
                                <p class="h-year">2020</p>
                                <div class="timeline-entry-inner">
                                    <div class="timeline-icon">
                                    </div>
                                    <div class="timeline-label">
                                        <h4>Establishment of the company</h4>
                                        <p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut et seo lage voluptates repudiandae sint et molestiae non mes  for Creating  futures through building preservation. Rising commodity prices tend to push bond prices lower.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-entry">
                                <p class="h-year">1985</p>
                                <div class="timeline-entry-inner">
                                    <div class="timeline-icon">
                                    </div>
                                    <div class="timeline-label">
                                        <h4>Endless Ambition </h4>
                                        <p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut et seo lage voluptates repudiandae sint et molestiae non mes  for Creating  futures through building preservation. Rising commodity prices tend to push bond prices lower.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-entry">
                                <p class="h-year">2000</p>
                                <div class="timeline-entry-inner">
                                    <div class="timeline-icon">
                                    </div>
                                    <div class="timeline-label">
                                        <h4>Strength of the Relationship</h4>
                                        <p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut et seo lage voluptates repudiandae sint et molestiae non mes  for Creating  futures through building preservation. Rising commodity prices tend to push bond prices lower.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-entry">
                                <p class="h-year">2012</p>
                                <div class="timeline-entry-inner">
                                    <div class="timeline-icon">
                                    </div>
                                    <div class="timeline-label">
                                        <h4>Together We Build</h4>
                                        <p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut et seo lage voluptates repudiandae sint et molestiae non mes  for Creating  futures through building preservation. Rising commodity prices tend to push bond prices lower.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-entry">
                                <p class="h-year">2016</p>
                                <div class="timeline-entry-inner">
                                    <div class="timeline-icon">
                                    </div>
                                    <div class="timeline-label">
                                        <h4>We’re Number One</h4>
                                        <p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut et seo lage voluptates repudiandae sint et molestiae non mes  for Creating  futures through building preservation. Rising commodity prices tend to push bond prices lower.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sideabar">
                    <div class="widget widget-sidebar widget-list-link">
                        <h4 class="title-widget-sidebar">
                            @lang("Categories")
                        </h4>
                        <ul class="wd-list-link">
                            <li><a href="{{route('association', app()->getLocale())}}">@lang("Association history")</a></li>
                            <li><a href="#">@lang("About Us")</a></li> 
                            <li><a href="#">@lang("Services")</a></li>
                            <li><a href="#">@lang("Staff")</a></li>
                            <li><a href="#">@lang("Staff")</a></li>

                        </ul>
                    </div>
                    <div class="widget widget-sidebar widget-text-block">
                        <h4 class="title-widget-sidebar">
                            @lang("About Association")
                        </h4>
                        <div class="wd-text-warp">
                            <p>Temporibus autem quibusdam et aut officiis debitis is  necessitatibus saepes eveniet ut et seo repudiandae sint et molestiae non Creating futures seon through world.</p>
                            <a href="#" class="ot-btn btn-main-color" >
                                <i class="fa fa-download" aria-hidden="true"></i>
                                @lang("Download")</a>
                        </div>
                    </div>
                    <div class="widget-sidebar widget widget-html">
                        <div class="wd-html-block">
                            <a href="#">
                                <img src="/images/Content/hiring.jpg" class="img-responsive" alt="Image">
                            </a>
                            <div class="content-wd-html-inner">
                                <span>@lang("Membership")</span>
                                <p>
                                    @lang("Become a member of association")!
                                </p>
                            </div>
                            <a href="#" class="ot-btn btn-sub-color" >
                                @lang("Become a member")
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection