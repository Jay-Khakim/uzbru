@extends('layouts.app')
@section('title')
<title>@lang("Staff") | O'zBRU</title>
@endsection
@section('content')
<section class="no-padding sh-team">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("Directors and staff")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             
             <li class="active">@lang("Staff")</li>
         </ol>
    </div>
</section>
<!-- /subheader -->
    
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="main-page">
                    <div class="about-founder">
                        <div class="box-img-left">
                            <div class="feature">
                                <img src="/images/Team/ceo.jpg" class="img-responsive " alt="Image">
                            </div>
                            <div class="boxcontent">
                                <h4>@lang("Chairman of the Board")</h4>
                                <p>@lang("According to the decision of the general meeting of the founders of the association, Malikov Yorkinjon Erkinjonovich, who is currently the first deputy chairman of the board of the Association of Exporters of Uzbekistan, has been appointed chairman of the board of the new association. He was born in 1987 in Tashkent. Nationality - Uzbek, education - higher. For information, Yorkinjon Malikov worked as Deputy Director of the family enterprise 'Euro Star Trade' from 2010 to 2018. From 2018 to present - Director of 'PRIME HOLDING' LLC, since 2019 - First Deputy Chairman of the Board of the Association of Exporters of Uzbekistan, as well as a deputy of the Almazar District Council of People's Deputies").</p>
                                <img src="/images/Team/sig.png" class="img-responsive sig" alt="Image">
                            </div>
                        </div>
                    </div>
                    <!-- /about founder -->
                    <div class="ourteam-page">
                        <div class="title-block text-center title-pd ">
                            <span class="top-title"></span>
                            <h2>@lang("Staff")</h2>
                            <p class="sub-title">@lang("As always, partners grows with you")!</p>
                            <span class="bottom-title"></span>
                        </div>
                        <div class="row">
                            @foreach ($staff as $item)
                            <div class="col-md-4 col-sm-6">
                                <div class="item-team">
                                    <img src="/storage/{{$item->image}}" class="img-responsive" alt="Image">
                                    <div class="body-team">
                                        <h4>{{$item->name}}</h4>
                                        <p>{{$item->position}}</p>
                                    </div>
                                    <div class="footer-team">
                                        @if ($item->email)
                                            <a class="google" href="{{$item->email}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        @endif
                                        @if ($item->facebook)
                                            <a class="facebook" href="{{$item->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        @endif
                                        @if ($item->instagram)
                                            <a class="instagram" href="{{$item->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        @endif
                                        @if ($item->linkedin)
                                            <a class="linkedin" href="{{$item->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        @endif
                                        @if ($item->twitter)
                                            <a class="twitter" href="{{$item->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        @endif
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                            <li><a href="{{route('about', app()->getLocale())}}">@lang("About Us")</a></li> 
                            <li><a href="{{route('services', app()->getLocale())}}">@lang("Services")</a></li>
                            <li><a href="{{route('team', app()->getLocale())}}">@lang("Staff")</a></li>
                            <li><a href="{{route('branches', app()->getLocale())}}">@lang("Branches")</a></li>

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
                                <span>@lang("HIRING")</span>
                                <p>
                                    @lang("COME TO JOIN OUR TEAM") !
                                </p>
                            </div>
                            <a href="#" class="ot-btn btn-sub-color" >
                                @lang("Join Now")
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection