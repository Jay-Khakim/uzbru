@extends('layouts.app')
@section('title')
    <title>@lang("Services") | O'zBRU</title>
@endsection
@section('content')
<section class="no-padding sh-services">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("Services")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             
             <li class="active">@lang("Services")</li>
         </ol>
    </div>
</section>
<!-- /subheader -->
    
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="services-list-warp">
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/1p.jpg" class="img-responsive" alt="Image">
                            <figcaption>Turnaround Consulting</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo voluptates repudiandae sint et molestiae non mes  Creating  futures through building pres preservation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt utonis labore et dolore magna aliqua.</p>
                            <a href="single_services.php" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/2p.jpg" class="img-responsive" alt="Image">
                            <figcaption>Bonds & Commodities</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo voluptates repudiandae sint et molestiae non mes  Creating  futures through building pres preservation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt utonis labore et dolore magna aliqua.</p>
                            <a href="#" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/3p.jpg" class="img-responsive" alt="Image">
                            <figcaption>Audit & Assurance</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo voluptates repudiandae sint et molestiae non mes  Creating  futures through building pres preservation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt utonis labore et dolore magna aliqua.</p>
                            <a href="#" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/4p.jpg" class="img-responsive" alt="Image">
                            <figcaption>Trades & Stocks</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo voluptates repudiandae sint et molestiae non mes  Creating  futures through building pres preservation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt utonis labore et dolore magna aliqua.</p>
                            <a href="#" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/5p.jpg" class="img-responsive" alt="Image">
                            <figcaption>Strategic Planning</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo voluptates repudiandae sint et molestiae non mes  Creating  futures through building pres preservation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt utonis labore et dolore magna aliqua.</p>
                            <a href="#" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/6p.jpg" class="img-responsive" alt="Image">
                            <figcaption>Financial Projections</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo voluptates repudiandae sint et molestiae non mes  Creating  futures through building pres preservation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt utonis labore et dolore magna aliqua.</p>
                            <a href="#" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-subcr-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="subcribe-warp">
                    <p class="sub-text-subcri">@lang("Newsletter for recieve") </p>
                    <form class="form-inline form-subcri">
                      <div class="form-group">
                        <label for="exampleInputName2"><small>our <span> latest company</span> updates</small></label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Your E-mail Address">
                      </div>
                      <button type="submit" class="btn-subcrib"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Subcribe -->
@endsection