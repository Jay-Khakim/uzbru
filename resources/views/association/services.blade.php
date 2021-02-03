@extends('layouts.app')
@section('title')
    <title>@lang("Services") | O'zBRU</title>
@endsection
@section('language')
    <li>
        <a href="{{route('services', 'en') }}"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
    </li>
    <li>
        <a href="{{route('services', 'ru') }}"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
    </li>
    <li>
        <a href="{{route('services', 'uz') }}"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
    </li>
@endsection
@section('mob-lang')
<a href="{{route('services', 'en') }}" style="color: white;"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
<a href="{{route('services', 'ru') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
<a href="{{route('services', 'uz') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
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
                            <figcaption>@lang("Demonstration in showrooms")</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>@lang("Facilitating the transition of business to the digital economy; (Posting products on Alibaba, Uzbekmart e-show)")</p>
                            <a href="single_services.php" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/2p.jpg" class="img-responsive" alt="Image">
                            <figcaption>@lang("Foreign trade offers")</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>@lang("Entrepreneurs and local producers who have become members of the Association will be provided with foreign trade proposals that will be implemented in Uzbekistan or will help to develop existing sectors")</p>
                            <a href="#" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/3p.jpg" class="img-responsive" alt="Image">
                            <figcaption>@lang("Legal advice")</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>@lang("Primary legal advice is provided by experts and management on legal issues or questions encountered in business or investment activities")</p>
                            <a href="#" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/4p.jpg" class="img-responsive" alt="Image">
                            <figcaption>@lang("Organizational support")</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>@lang("Providing legal advice on issues related to customs clearance (practical assistance in coordinating customs costs)")</p>
                            <a href="#" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/5p.jpg" class="img-responsive" alt="Image">
                            <figcaption>@lang("Transport and logistics")</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>@lang("Providing legal advice on the organization of cheap and guaranteed transport and logistics in the process of import and export of products from foreign countries")</p>
                            <a href="#" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/6p.jpg" class="img-responsive" alt="Image">
                            <figcaption>@lang("Participation in exhibitions")</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>@lang("Exhibitions organized abroad also provide free or discounted participation of members of the association in fairs")</p>
                            <a href="#" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>

                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/1p.jpg" class="img-responsive" alt="Image">
                            <figcaption>@lang("Discounts from hotels")</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>@lang("Offering discounts to members and partners of the Association as part of business visits from hotels across the country")</p>
                            <a href="single_services.php" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/2p.jpg" class="img-responsive" alt="Image">
                            <figcaption>@lang("Foreign trade offers")</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>@lang("Entrepreneurs and local producers who have become members of the Association will be provided with foreign trade proposals that will be implemented in Uzbekistan or will help to develop existing sectors")</p>
                            <a href="#" class="ot-btn btn-sub-color" >Read More</a>
                        </div>
                    </div>
                    <div class="item-service-list">
                        <figure>
                            <img src="/images/Services/3p.jpg" class="img-responsive" alt="Image">
                            <figcaption>@lang("Legal advice")</figcaption>
                        </figure>
                        <div class="box-sum-service">
                            <p>@lang("Primary legal advice is provided by experts and management on legal issues or questions encountered in business or investment activities")</p>
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