@extends('layouts.app')
@section('title')
    <title>@lang("Uzbekistan Business Development Association") | @lang("UBDA")</title>
@endsection
@section('language')
    <li>
        <a href="{{ url( 'en') }}"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
    </li>
    <li>
        <a href="{{ url( 'ru') }}"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
    </li>
    <li>
        <a href="{{ url( 'uz') }}"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
    </li>
@endsection
@section('mob-lang')
<a href="{{ url( 'en') }}" style="color: white;"><img src="/images/icon/1.jpg" alt="JB's Language Icon"><span>En</span></a>
<a href="{{ url( 'ru') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/2.jpg" alt="JB's Language Icon"><span>Ru</span></a>
<a href="{{ url( 'uz') }}" style="color: white; padding-left: 15px;"><img src="/images/icon/3.jpg" alt="JB's Language Icon"><span>Uz</span></a>
@endsection
@section('content')
<!-- Slider -->
<section id="slider" class="no-padding">
    <div id="slide_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="slider_3" class="rev_slider fullwidthabanner slider-home1" style="display:none;" data-version="5.0.7">
            <ul>
                <!-- SLIDE  -->
                <li data-title="FOCUS ON">
                    <!-- MAIN IMAGE -->
                    <img src="/images/Slider/home3/1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 0 -->
                    <div class="tp-caption tp-resizeme" 
                         data-x="right" data-hoffset="" 
                         data-y="bottom" data-voffset=""
                         data-width="['580','580','580','auto']" 
                        data-transform_idle="o:1;"
                        data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:550px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-start="1000" 

                        data-responsive_offset="on" 
                        ><img src="/images/Slider/home3/people1.png" class="img-responsive hidden-sm hidden-xs" alt="Image">
                    </div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme sl-s5" 
                         data-x="left" data-hoffset="0" 
                         data-y="center" data-voffset="-45"
                         data-width="['400','400','400','300']" 
                        data-transform_idle="o:1;"
                        data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:-100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  
                        data-start="1700" 
                        data-whitespace="normal"
                        data-fontsize="['60','60','60','30']"
                        data-lineheight="['70','70','70','50']"
                        data-responsive_offset="on" 
                        >
                        <p>@lang("Entrepreneurship <span> Activity </span> Development")</p>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" 
                         data-x="left" data-hoffset="0" 
                         data-y="center" data-voffset="65" 
                         data-width="['580','580','480','300']"
                        data-transform_idle="o:1;"
                        data-whitespace=normal
                        data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:-100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1900" 
                        data-responsive_offset="on" 
                        ><p class="sl-s3 mt-2">@lang("Uzbekistan Business Development Association")</p>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption" 
                         data-x="left" data-hoffset="0" 
                         data-y="bottom" data-voffset="180" 
                        data-transform_idle="o:1;"
                        data-actions='[{"event":"click", "action":"jumptoslide", "slide":"prev", "delay":""}]' 
                        data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:-100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="2100" 
                        ><a href="#" class="sl-btn-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption" 
                         data-x="left" data-hoffset="70" 
                         data-y="bottom" data-voffset="180" 
                        data-transform_idle="o:1;"
                        data-actions='[{"event":"click", "action":"jumptoslide", "slide":"next", "delay":""}]' 
                        data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:-100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="2100" 
                        ><a href="#" class="sl-btn-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-title="FOCUS ON">
                    <!-- MAIN IMAGE -->
                    <img src="/images/Slider/home3/2.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 0 -->
                    <div class="tp-caption tp-resizeme" 
                         data-x="right" data-hoffset="" 
                         data-y="bottom" data-voffset=""
                         data-width="['580','580','580','auto']" 
                        data-transform_idle="o:1;"
                        data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:550px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-start="1000" 

                        data-responsive_offset="on" 
                        ><img src="/images/Slider/home3/people2.png" class="img-responsive hidden-sm hidden-xs" alt="Image">
                    </div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme sl-s5" 
                         data-x="left" data-hoffset="0" 
                         data-y="center" data-voffset="-45"
                         data-width="['400','400','400','300']" 
                        data-transform_idle="o:1;"
                        data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:-100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  
                        data-start="1700" 
                        data-whitespace="normal"
                        data-fontsize="['60','60','60','30']"
                        data-lineheight="['70','70','70','50']"
                        data-responsive_offset="on" 
                        >
                        <p>@lang("BUSINESS <SPAN> SUPPORT </span>")</p>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" 
                         data-x="left" data-hoffset="0" 
                         data-y="center" data-voffset="65" 
                         data-width="['580','580','480','300']"
                        data-transform_idle="o:1;"
                        data-whitespace=normal
                        data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:-100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1900" 
                        data-responsive_offset="on" 
                        ><p class="sl-s3 mt-2">@lang("Uzbekistan Business Development Association")</p>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption" 
                         data-x="left" data-hoffset="0" 
                         data-y="bottom" data-voffset="180" 
                        data-transform_idle="o:1;"
                        data-actions='[{"event":"click", "action":"jumptoslide", "slide":"prev", "delay":""}]' 
                        data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:-100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="2100" 
                        ><a href="#" class="sl-btn-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption" 
                         data-x="left" data-hoffset="70" 
                         data-y="bottom" data-voffset="180" 
                        data-transform_idle="o:1;"
                        data-actions='[{"event":"click", "action":"jumptoslide", "slide":"next", "delay":""}]' 
                        data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:-100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="2100" 
                        ><a href="#" class="sl-btn-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-title="FOCUS ON">
                    <!-- MAIN IMAGE -->
                    <img src="images/Slider/home3/3.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 0 -->
                    <div class="tp-caption tp-resizeme" 
                         data-x="right" data-hoffset="" 
                         data-y="bottom" data-voffset=""
                         data-width="['580','580','580','auto']" 
                        data-transform_idle="o:1;"
                        data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:550px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-start="1000" 

                        data-responsive_offset="on" 
                        ><img src="/images/Slider/home3/people3.png" class="img-responsive hidden-sm hidden-xs" alt="Image">
                    </div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme sl-s5" 
                         data-x="left" data-hoffset="0" 
                         data-y="center" data-voffset="-45"
                         data-width="['400','400','400','300']" 
                        data-transform_idle="o:1;"
                        data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:-100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  
                        data-start="1700" 
                        data-whitespace="normal"
                        data-fontsize="['60','60','60','30']"
                        data-lineheight="['70','70','70','50']"
                        data-responsive_offset="on" 
                        ><p>@lang("A trusted <span>Business</span> Partner")</p>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" 
                         data-x="left" data-hoffset="0" 
                         data-y="center" data-voffset="65" 
                         data-width="['580','580','480','300']"
                        data-transform_idle="o:1;"
                        data-whitespace=normal
                        data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:-100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1900" 
                        data-responsive_offset="on" 
                        >
                        <br><p class="sl-s3 mt-2">@lang("Uzbekistan Business Development Association")</p>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption" 
                         data-x="left" data-hoffset="0" 
                         data-y="bottom" data-voffset="180" 
                        data-transform_idle="o:1;"
                        data-actions='[{"event":"click", "action":"jumptoslide", "slide":"prev", "delay":""}]' 
                        data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:-100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="2100" 
                        ><a href="#" class="sl-btn-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption" 
                         data-x="left" data-hoffset="70" 
                         data-y="bottom" data-voffset="180" 
                        data-transform_idle="o:1;"
                        data-actions='[{"event":"click", "action":"jumptoslide", "slide":"next", "delay":""}]' 
                        data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                         data-transform_out="x:-100px;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="2100" 
                        ><a href="#" class="sl-btn-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- /Slider -->

<section class="no-padding">
    <div class="container">
        <div class="row">
            <div class="whyus-warp-h2 core-value-h3">
                <div class="col-md-6">
                    <div class="left-whyus-h2">
                        <div class="demo-style-1-warp">
                            <img src="/images/Content/bg-core-value-h3.png" class="img-responsive" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-whyus-h2">
                        <div class="iconbox-warp ">
                            <div class="title-block">
                                <span class="top-title"></span>
                                <h2>@lang("About Us")</h2>
                                <p class="sub-title">@lang("Open closed doors with us")!</p>
                                <span class="bottom-title"></span>
                            </div>
                            <p class="demo-sub-about-text">@lang("In order to ensure the implementation of the Decree of the President of the Republic of Uzbekistan dated 03.04.2020 'On additional measures to support the population, sectors of the economy and businesses during the coronavirus pandemic' 'Association Business Development of Uzbekistan' was established").</p>
                            <h4>@lang("The basis of the association")</h4>
                            <p>@lang("The association was registered by the Ministry of Justice on October 26, 2020 with the registration number №309").</p>
                            <h4>@lang("Chairman of the Association")</h4>
                            <p>@lang("Malikov Yorkinjon Erkinjonovich, Chairman of the Board of the Business Development Association of Uzbekistan").</p>
                            <h4>@lang("The purpose of the association")</h4>
                            <p>@lang("Support of entrepreneurs in our country, implementation of active transformation processes of entrepreneurs to world business standards, assistance in reducing the shadow economy, transformation of business entities into the digital economy").</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about description -->

<section class="no-padding offer-h10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-block text-center title-pd">
                    <span class="top-title "></span>
                    <h2>@lang("Our Advantages")</h2>
                    <p class="sub-title">@lang("Open closed doors with us")!</p>
                    <span class="bottom-title"></span>
                </div>
                <div class="warp-full-width services-h1-warp offer-h10-warp">
                <div class="col-md-4 col-sm-6">
                    <div class="item-offer-h10" >
                        <div class="iconbox-type-xs  text-center">
                            <span class="lnr lnr-pie-chart"></span>
                            <h4>@lang("Convenience for investors")</h4>
                            <p>@lang("Creating convenience and benefits for investors in the course of their activities in Uzbekistan (transport, hotel, all conditions for signing a contract  and law services)").</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="item-offer-h10 bg-light-grey" >
                        <div class="iconbox-type-xs text-center">
                            <span class="lnr lnr-calendar-full"></span>
                            <h4>@lang("Cooperation")</h4>
                            <p>@lang("Facilitating the establishment of guaranteed business partnerships for investors and entrepreneurs, the collection of mutual information between the parties.")</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="item-offer-h10" >
                        <div class="iconbox-type-xs text-center">
                            <span class="lnr lnr-briefcase"></span>
                            <h4>@lang("Facilitate the reduction of clandestine business")</h4>
                            <p>@lang("Helping to reduce the number of shadow economy entities in the territory of Uzbekistan and a full analysis of their causes.")</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="item-offer-h10 bg-light-grey" >
                        <div class="iconbox-type-xs text-center">
                            <span class="lnr lnr-layers"></span> 
                            <h4>@lang("Customs and tax service")</h4>
                            <p>@lang("Assisting in resolving problems with customs clearance and taxes")</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="item-offer-h10" >
                        <div class="iconbox-type-xs text-center">
                            <span class="lnr lnr-pie-chart"></span>
                            <h4>@lang("Legal support")</h4>
                            <p>@lang("Industry news, decisions and implementation of laws")</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="item-offer-h10 bg-light-grey" >
                        <div class="iconbox-type-xs text-center">
                            <span class="lnr lnr-calendar-full"></span>
                            <h4>@lang("Exports and imports")</h4>
                            <p>@lang("Stabilization and control of the export-import process, legal and practical assistance in solving problems arising in this process")</p>
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
            {{-- <div class="col-md-12 text-center">
                <a href="cases.html" class="ot-btn btn-border-dark-color">@lang("All")</a>
            </div> --}}
        </div>
    </div>
</section>
<!-- /Offer -->

<section class="no-padding bg-counter-h1">
    <div class="container">
        <div class="row">
            <div class="warp-counter">
                <div class="col-md-3 col-sm-6">
                    <div class="counter-inline">
                        <span class="icon icon-stats-bars"></span>
                        <span class="counter">460</span>
                        <p>@lang("Solved problems")</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-inline">
                        <span class="icon icon-users"></span>
                        <span class="counter">290</span>
                        <p>@lang("Members")</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-inline">
                        <span class="icon icon-trophy"></span>
                        <span class="counter">18</span>
                        <p>@lang("Achievements")</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-inline">
                        <span class="icon icon-library"></span>
                        <span class="counter">50</span>
                        <p>@lang("Partners")</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- couterup -->

<section>
    <div class="container">
        <div class="row">
            <div class="title-block text-center">
                <span class="top-title "></span>
                <h2>@lang("Functions of the Association")</h2>
                <p class="sub-title">@lang("Tasks of the Business Development Association of Uzbekistan")</p>
                <span class="bottom-title"></span>
            </div>
            <div class="whyus-warp-h3">
                <div class="col-md-4">
                    <div class="iconbox-inline">
                        <span class="icon icon-trophy"></span>
                        <h4>@lang("Business development")</h4>
                        <p>@lang("Assisting local producers and entrepreneurs in Uzbekistan to find their place in the world market, and foreign investors to establish or expand their activities in the country")</p>
                    </div>
                    <div class="iconbox-inline">
                        <span class="icon icon-library"></span>
                        <h4>@lang("Assisting the government")</h4>
                        <p>@lang("Assist the government in reducing the shadow economy and similar issues")</p>
                    </div>
                    <div class="iconbox-inline">
                        <span class="icon icon-user-check"></span>
                        <h4>@lang("Merge members")</h4>
                        <p>@lang("Coordinating and protecting the activities of the members of the Association by voluntarily uniting them")</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iconbox-inline">
                            <span class="icon icon-profile"></span>
                            <h4>@lang("Add an offer")</h4>
                            <p>@lang("Make suggestions for changes to existing laws and regulations as needed to address existing issues").</p>
                    </div>
                    <div class="iconbox-inline">
                        <span class="icon icon-briefcase"></span>
                        <h4>@lang("Coordination of activities")</h4>
                        <p>@lang("Coordinating the investment, commercial, scientific, technical and economic activities of its members").</p>
                    </div>
                    <div class="iconbox-inline">
                        <span class="icon icon-rocket"></span>
                        <h4>@lang("Capacity building")</h4>
                        <p>@lang("Study and promote the experience of developed countries in business capacity building").</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iconbox-inline">
                        <span class="icon icon-power"></span>
                        <h4>@lang("Marketing research")</h4>
                        <p>@lang("To conduct in-depth marketing research and analysis in order to develop the business, to determine the appropriate measures based on their results")</p>
                    </div>
                    <div class="iconbox-inline">
                        <span class="icon icon-key"></span>
                        <h4>@lang("Organizational support")</h4>
                        <p>@lang("Close assistance in organizing exhibitions and various business forums at home and abroad")</p>
                    </div>
                    <div class="iconbox-inline">
                        <span class="icon icon-shield"></span>
                        <h4>@lang("Helping with problems")</h4>
                        <p>@lang("Investigate the problems of its members' businesses and identify solutions")</p>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</section>
<!-- /Why Choose Us -->

<section class="bg-plan-h5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="group-title-btn">
                    <div class="title-block">
                        <span class="top-title"></span>
                        <h2>@lang("The principle of association")</h2>
                        <p class="sub-title">@lang("Open closed doors with us")!</p>
                        <span class="bottom-title"></span>
                    </div>
                    <div class="customNavigation">
                        <a class="btn-3 btn-3-prev prev-step"><i class="fa fa-angle-left"></i></a>
                        <a class="btn-3 btn-3-next next-step"><i class="fa fa-angle-right"></i></a>
                    </div><!-- End owl button -->
                </div>
                <div class="plan-warp-h5">
                    <div id="plan-h5" class="owl-plan-h5">
                        <div class="item-plan-step">

                            <div class="step">1</div>
                            <h4>@lang("Acceptance of appeals")</h4>
                            <p>@lang("Accepting written issues addressed by members of the Association") </p>
                        </div>

                        <div class="item-plan-step">
                            
                            <div class="step">2</div>
                            <h4>@lang("Study the problem")</h4>
                            <p>@lang("Investigate the origins and causes of problems")</p>
                        </div>

                        <div class="item-plan-step">
                            
                            <div class="step">3</div>
                            <h4>@lang("Analyze")</h4>
                            <p>@lang("Work with sources and officials and establish effective partnerships to find the root of the problem") </p>
                        </div>

                        <div class="item-plan-step">
                            
                            <div class="step">4</div>
                            <h4>@lang("Giving solutions")</h4>
                            <p>@lang("Propose solutions to the existing problem by the association and study the views of the applicant") </p>
                        </div>

                        <div class="item-plan-step">
                            
                            <div class="step">5</div>
                            <h4>@lang("Problem solving")</h4>
                            <p>@lang("Positively address the issue by creating a variety of conveniences and conditions for members") </p>
                        </div>

                        <div class="item-plan-step">
                            
                            <div class="step">6</div>
                            <h4>@lang("Result")</h4>
                            <p>@lang("Record a positive result on the application") </p>
                        </div>

                        {{-- <div class="item-plan-step">
                            
                            <div class="step">7</div>
                            <h4>@lang("Result")</h4>
                            <p>The lysine contingency it's intended to prevent the spread of the animals is case they ever got off the island. </p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Planning -->


{{-- <section class="cb-h3 no-padding">
    <div class="container">				
        <div class="row">
            <div class="callback-warp cbw-h3">
                <div class="col-md-6 col-md-offset-3">
                        <div class="title-block title-on-dark text-center title-pd">
                            <span class="top-title "></span>
                            <h2>Uyushmaga a'zo bo'lish</h2>
                            <p class="sub-title">Uyushma a'zo bo'lish uchun quyidagi formani to'ldiring</p>
                            <span class="bottom-title"></span>
                        </div>
                        <div class="form-cb-warp">
                            <form class="cb-form cb-form-on-dark">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Korxona nomi*">
                                </div>

                                <select class="cb">
                                    <option value="">Hududni tanlang</option>
                                    <option>Toshkent shahar</option>
                                    <option>Toshkent viloyati</option>
                                    <option>Andijon viloyati</option>
                                    <option>Buxoro viloyati</option>
                                    <option>Fargʻona viloyati</option>
                                    <option>Jizzax viloyati	</option>
                                    <option>Xorazm viloyati</option>
                                    <option>Namangan viloyati</option>
                                    <option>Navoiy viloyati</option>
                                    <option>Qashqadaryo viloyati</option>
                                    <option>Qoraqalpogʻiston Respublikasi</option>
                                    <option>Samarqand viloyati</option>
                                    <option>Sirdaryo viloyati</option>
                                    <option>Surxondaryo viloyati</option>
                                </select>
                                <div class="form-group">
                                    <input type="text" class="form-control"   placeholder="Yuridik manzil*">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"   placeholder="STIR raqami*">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"   placeholder="Email manzil*">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" placeholder="Telefon raqam*">
                                </div>
                                
                                <button type="submit" class="btn-white-color"><i class="fa fa-paper-plane" aria-hidden="true"></i> A'zo bo'lish</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- /call back -->

<section class="no-padding">
    <div class="container">
        <div class="row">
            <div class="title-block text-center title-pd">
                <span class="top-title "></span>
                <h2>@lang("Our partners")</h2>
                <p class="sub-title">@lang("Partners of Uzbekistan Business Development Association") </p>
                <span class="bottom-title"></span>
            </div>
            <div class="col-md-12">
                <div id="partner-h2" class="owl-partner-h2">
                    <div class="item-partner" >
                        <a href="#"><img src="/images/Partner/1.jpg" class="img-responsive partner-img" alt="Image"></a>							
                    </div>
                    <div class="item-partner" >
                        <a href="#"><img src="/images/Partner/2.jpg" class="img-responsive partner-img" alt="Image"></a>							
                    </div>
                    <div class="item-partner" >
                        <a href="#"><img src="/images/Partner/3.jpg" class="img-responsive partner-img" alt="Image"></a>							
                    </div>
                    <div class="item-partner" >
                        <a href="#"><img src="/images/Partner/4.jpg" class="img-responsive partner-img" alt="Image"></a>							
                    </div>
                    <div class="item-partner" >
                        <a href="#"><img src="/images/Partner/5.jpg" class="img-responsive partner-img" alt="Image"></a>							
                    </div>
                    <div class="item-partner" >
                        <a href="#"><img src="/images/Partner/6.jpg" class="img-responsive partner-img" alt="Image"></a>							
                    </div>
                    <div class="item-partner" >
                        <a href="#"><img src="/images/Partner/7.jpg" class="img-responsive partner-img" alt="Image"></a>							
                    </div>
                    <div class="item-partner" >
                        <a href="#"><img src="/images/Partner/8.jpg" class="img-responsive partner-img" alt="Image"></a>							
                    </div>
                    <div class="item-partner" >
                        <a href="#"><img src="/images/Partner/6.jpg" class="img-responsive partner-img" alt="Image"></a>							
                    </div>
                    <div class="item-partner" >
                        <a href="#"><img src="/images/Partner/7.jpg" class="img-responsive partner-img" alt="Image"></a>							
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /partner -->
{{-- <section class="bg-tw-h6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-warp tw-h6">
                    <div id="testimonial-h6" class="owl-testimonial-h6">
                        <div class="item-testimonial-h6 text-center" >
                            <a href="#"><img src="/images/Testimonial/1.jpg" class="img-responsive" alt="Image"></a>							
                        
                            <p>Imagination… What we can easily see is only a small percentage of what is possible. Logistics through innovation, dedication, and technology.</p>
                            <span class="h-line-sm"></span>
                            <span class="name">Fatma Hassan</span>
                        </div>
                        <div class="item-testimonial-h6 text-center" >
                            <a href="#"><img src="/images/Testimonial/2.jpg" class="img-responsive" alt="Image"></a>							
                        
                            <p>Imagination… What we can easily see is only a small percentage of what is possible. Logistics through innovation, dedication, and technology.</p>
                            <span class="h-line-sm"></span>
                            <span class="name">Marion Raven</span>
                        </div>
                        <div class="item-testimonial-h6 text-center" >
                            <a href="#"><img src="/images/Testimonial/3.jpg" class="img-responsive" alt="Image"></a>							
                        
                            <p>Imagination… What we can easily see is only a small percentage of what is possible. Logistics through innovation, dedication, and technology.</p>
                            <span class="h-line-sm"></span>
                            <span class="name">James Staling</span>
                        </div>
                        <div class="item-testimonial-h6 text-center" >
                            <a href="#"><img src="/images/Testimonial/4.jpg" class="img-responsive" alt="Image"></a>							
                        
                            <p>Imagination… What we can easily see is only a small percentage of what is possible. Logistics through innovation, dedication, and technology.</p>
                            <span class="h-line-sm"></span>
                            <span class="name">Adam D. Roger</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- /Testimonial -->


<section class="bg-news-h9">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-block text-center">
                    <span class="top-title "></span>
                    <h2>@lang("News")</h2>
                    <p class="sub-title">@lang("All about association updates")</p>
                    <span class="bottom-title"></span>
                </div>
            </div>
            <div class="warp-full-width news-h9-warp ">
                <div id="news-h9" class="  owl-news-h9">
                    @foreach ($news as $item)
                        <div class="item-new">
                            <a href="single_new.html"><img src="/storage/{{$item->image1}}" class="img-responsive" alt="Image"></a>
                            <div class="new-info">
                                <h4><a href="#">{{$item->title}}</a></h4>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i>
                                    @if ($item->created_at->format('m') == 1)
                                        @lang("Jan")
                                    @endif
                                    @if ($item->created_at->format('m') == 2)
                                        @lang("Feb")
                                    @endif
                                    @if ($item->created_at->format('m') == 3)
                                        @lang("Mar")
                                    @endif
                                    @if ($item->created_at->format('m') == 4)
                                        @lang("Apr")
                                    @endif
                                    @if ($item->created_at->format('m') == 5)
                                        @lang("May")
                                    @endif
                                    @if ($item->created_at->format('m') == 6)
                                        @lang("Jun")
                                    @endif
                                    @if ($item->created_at->format('m') == 7)
                                        @lang("Jul")
                                    @endif
                                    @if ($item->created_at->format('m') == 8)
                                        @lang("Aug")
                                    @endif
                                    @if ($item->created_at->format('m') == 9)
                                        @lang("Sep")
                                    @endif
                                    @if ($item->created_at->format('m') == 10)
                                        @lang("Oct")
                                    @endif
                                    @if ($item->created_at->format('m') == 11)
                                        @lang("Nov")
                                    @endif
                                    @if ($item->created_at->format('m') == 12)
                                        @lang("Dec")
                                    @endif 
                                    {{$item->created_at->format('d')}}, {{$item->created_at->format('Y')}}</p>
                                <p><i class="fa fa-user" aria-hidden="true"></i><a href="#">
                                    @if ($item->author)
                                        {{$item->author}}
                                    @else 
                                        @lang("By Admin")
                                    @endif
                                    </a></p>
                                {{-- <p><i class="fa fa-comments" aria-hidden="true"></i><a href="#">28</a> </p> --}}
                                <p>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- /News -->


<section>
    <div class="social-inner social-inner-h2 social-inner-h4">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
            <img src="/images/Logo-on-light.png" class="img-responsive" alt="Image">
            <p>@lang("Uzbekistan Business Development Association supports the development of your business! Find a legal solution to any business problem with us!") </p>
            <ul class="widget widget-footer widget-footer-social-1 social-hover-defaul">
                <li><a class="facebook" href="https://www.facebook.com/ozbekistonbiznesnirivojlantirish.uyushmasi.7"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a class="twitter" href="https://t.me/bru_uz"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
                {{-- <li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> --}}
                <li><a class="linkedin" href="https://www.instagram.com/uz_bru/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                {{-- <li><a class="flickr" href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li> --}}
            </ul>
            </div>
        </div>
    </div>
</section>
<!-- /Social -->
@endsection