@extends('layouts.app')
@section('title')
    <title>@lang("About Us") | O'zBRU</title>
@endsection
@section('language')
    <li>
        <a href="{{route('about', 'en') }}"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
    </li>
    <li>
        <a href="{{route('about', 'ru') }}"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
    </li>
    <li>
        <a href="{{route('about', 'uz') }}"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
    </li>
@endsection
@section('mob-lang')
<a href="{{route('about', 'en') }}" style="color: white;"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
<a href="{{route('about', 'ru') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
<a href="{{route('about', 'uz') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
@endsection
@section('content')
<section class="no-padding sh-about">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("About Us")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             <li>
                 <a href="{{route('association', app()->getLocale())}}"> @lang("Association") </a>
             </li>
             <li class="active">@lang("About Us")</li>
         </ol>
    </div>
</section>
<!-- /Sub header -->

<section class="no-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-block text-center title-pd">
                    <span class="top-title"></span>
                    <h2>@lang("Why to choose us")</h2>
                    <p class="sub-title">@lang("As always, partners grows with you")!</p>
                    <span class="bottom-title"></span>
                </div>
            </div>
            <div class="col-md-6">
                <h4>@lang("Our Mission")</h4>
                <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam dolor sit pres through future.</p>
            </div>
            <div class="col-md-6">
                <h4>@lang("Our Vision")</h4>
                <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam dolor sit pres through future.</p>
            </div>
            <div class="warp-counter warp-counter-about-2">
                <div class="col-md-3 col-sm-6">
                    <div class="counter-inline counter-on-light">
                        <span class="icon icon-stats-bars"></span>
                        <span class="counter">460</span>
                        <p>Cases completed</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-inline counter-on-light">
                        <span class="icon icon-users"></span>
                        <span class="counter">29</span>
                        <p>Consultants</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-inline counter-on-light">
                        <span class="icon icon-trophy"></span>
                        <span class="counter">18</span>
                        <p>Awards winning</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-inline counter-on-light">
                        <span class="icon icon-library"></span>
                        <span class="counter">50</span>
                        <p>Years of Experiences</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /about description -->

<section class="bg-theme partner-h8-warp">
    <div class="container">
        <div class="row">
            <div id="partner-h2" class="owl-partner-h8">
                <div class="item-partner item-partner-h8" >
                    <a href="javascript:void(0)"><img src="/images/Partner/9.png" class="img-responsive partner-img" alt="Image"></a>							
                </div>
                <div class="item-partner item-partner-h8" >
                    <a href="javascript:void(0)"><img src="/images/Partner/10.png" class="img-responsive partner-img" alt="Image"></a>							
                </div>
                <div class="item-partner item-partner-h8" >
                    <a href="javascript:void(0)"><img src="/images/Partner/11.png" class="img-responsive partner-img" alt="Image"></a>							
                </div>
                <div class="item-partner item-partner-h8" >
                    <a href="javascript:void(0)"><img src="/images/Partner/12.png" class="img-responsive partner-img" alt="Image"></a>							
                </div>
                <div class="item-partner item-partner-h8" >
                    <a href="javascript:void(0)"><img src="/images/Partner/9.png" class="img-responsive partner-img" alt="Image"></a>							
                </div>
                <div class="item-partner item-partner-h8" >
                    <a href="javascript:void(0)"><img src="/images/Partner/10.png" class="img-responsive partner-img" alt="Image"></a>							
                </div>
                <div class="item-partner item-partner-h8" >
                    <a href="javascript:void(0)"><img src="/images/Partner/11.png" class="img-responsive partner-img" alt="Image"></a>							
                </div>
                <div class="item-partner item-partner-h8" >
                    <a href="javascript:void(0)"><img src="/images/Partner/12.png" class="img-responsive partner-img" alt="Image"></a>							
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Partner -->

<section class="bg-strategy-h4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="strategy-warp-h4">
                    <div class="title-block text-center">
                        <span class="top-title"></span>
                        <h2>@lang("Strategy Development")</h2>
                        <p class="sub-title">@lang("As always, partners grows with you")!</p>
                        <span class="bottom-title"></span>
                    </div>
                    <p class="demo-sub-about-text-4">Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo lage voluptates repudiandae sint et molestiae non mes  for Creating  futures through building pres preservation.</p>
                    <div class="col-md-4">
                        <div class="iconbox text-center">
                            <span class="icon icon-pie-chart"></span>
                            <h4>Cash Flow</h4>
                            <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.</p>
                        </div>
                        <div class="iconbox text-center no-mgb">
                            <span class="icon icon-library"></span>
                            <h4>Investments</h4>
                            <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iconbox text-center">
                            <span class="icon icon-coin-dollar"></span>
                            <h4>Purchases</h4>
                            <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.</p>
                        </div>
                        <div class="iconbox text-center no-mgb">
                            <span class="icon icon-user-tie"></span>
                            <h4>Considerations</h4>
                            <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iconbox text-center">
                            <span class="icon icon-stats-bars2"></span>
                            <h4>Collections</h4>
                            <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.</p>
                        </div>
                        <div class="iconbox text-center no-mbg">
                            <span class="icon icon-trophy"></span>
                            <h4>Professional</h4>
                            <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /strategy -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-block text-center">
                    <span class="top-title"></span>
                    <h2>@lang("Our Team")</h2>
                    <p class="sub-title">@lang("As always, partners grows with you")!</p>
                    <span class="bottom-title"></span>
                </div>
                <div class="warp-full-width team-h4-warp">
                    <div id="team" class="owl-team owl-team-h4">
                        @foreach ($staff as $item)
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
                        @endforeach
                        								
                    </div>

                    <div class="customNavigation">
                        <a class="btn-2 prev-team prev-team-h4"><i class="fa fa-angle-left"></i></a>
                        <a class="btn-2 next-team next-team-h4"><i class="fa fa-angle-right"></i></a>
                    </div><!-- End owl button -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Team -->
@endsection