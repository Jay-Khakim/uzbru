@extends('layouts.app')
@section('title')
<title>{{$member->name}} | O'zBRU</title>
    
@endsection

@section('content')
<section class="no-padding sh-case-single">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("Member of Association")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             <li>
                <a href="{{route('bemember', app()->getLocale())}}">@lang("Membership")</a>
             </li>
             <li class="active">@lang("Member of Association")</li>
         </ol>
    </div>
</section>
<!-- /Sub HEader -->

<section>
    <div class="container">
        <div class="row">
            <div class="case-detail-warp">
                <div class="col-md-7">
                    <img src="/storage/{{$member->image}}" class="img-responsive" alt="Image">
                </div>
                <div class="col-md-5">
                    <div class="case-detail-info">
                        <h3>{{$member->name}}</h3>
                        <p class="case-cate">{{$member->filed}}</p>
                        <dl class="dl-horizontal">
                          <dt>@lang("Owners Name")</dt>
                          <dd>{{$member->owner}}</dd>
                          <dt>@lang("Location")</dt>
                          <dd>{{$member->address}}</dd>
                          <dt>@lang("Established Year")</dt>
                          <dd>{{$member->year}}</dd>
                          <dt>@lang("Value")</dt>
                          <dd>{{$member->value}} $</dd>
                        </dl>
                        {{-- <h4>Advisors</h4> --}}
                        {{-- <div class="advisors-warp">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Jameel Rateb"><img src="/images/Comment/1.jpg" class="img-responsive" alt="Image"></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Amany Arafa"><img src="/images/Comment/2.jpg" class="img-responsive" alt="Image"></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Fatma Mahmoud"><img src="/images/Comment/3.jpg" class="img-responsive" alt="Image"></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="box-text-case">
                            <div class="col-md-4">
                            <h4>Solution</h4>
                            <p>The path of the righteous man is beset on all sides iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children.</p>
                            </div>
                            <div class="col-md-4">
                            <h4>Challenge</h4>
                            <p>The path of the righteous man is beset on all sides iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children.</p>
                            </div>
                            <div class="col-md-4">
                            <h4>Stratgy</h4>
                            <p>The path of the righteous man is beset on all sides iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Case Detail Info -->
{{-- 
<section class="bg-light-grey">
    <div class="container">
        <div class="title-block text-center">
            <span class="top-title"></span>
            <h2>Biznes Analitikasi</h2>
            <p class="sub-title">Biznesingizni birgalikda rivojlantiramiz</p>
            <span class="bottom-title"></span>
        </div>
        <div class="row">
            <div class="col-md-12">
                <canvas id="myChart" width="400" height="200" style="margin-top:60px;"></canvas>
            </div>
        </div>
    </div>
</section>
<!-- /Chart --> --}}


{{-- <section >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-block">
                    <span class="top-title"></span>
                    <h2>Uyushma a'zolari</h2>
                    <p class="sub-title">As always, partners grows with you!</p>
                    <span class="bottom-title"></span>
                </div>
            </div>
            <div class="relate-cases-warp">
                <div id="relate-cases" class="owl-relate-cases">
                <div class="item-project">
                    <img src="images/Project/5.jpg" class="img-responsive" alt="Image">
                    <div class="overlay-project">
                        <h4><a href="#">Enterprise Loan</a></h4>
                        <a class="cate" href="#">Accumulation</a>
                    </div>
                </div>	
                <div class="item-project">
                    <img src="images/Project/2.jpg" class="img-responsive" alt="Image">
                    <div class="overlay-project">
                        <h4><a href="#">Turnaround Consultingan</a></h4>
                        <a class="cate" href="#">Accumulation</a>
                    </div>
                </div>
                <div class="item-project">
                    <img src="images/Project/3.jpg" class="img-responsive" alt="Image">
                    <div class="overlay-project">
                        <h4><a href="#">Audit & Assurance</a></h4>
                        <a class="cate" href="#">Assurance</a>
                    </div>
                </div>
                <div class="item-project">
                    <img src="images/Project/4.jpg" class="img-responsive" alt="Image">
                    <div class="overlay-project">
                        <h4><a href="#">Strategic Planning</a></h4>
                        <a class="cate" href="#">Strategic</a>
                    </div>
                </div>
                <div class="item-project">
                    <img src="images/Project/6.jpg" class="img-responsive" alt="Image">
                    <div class="overlay-project">
                        <h4><a href="#">Enterprise Loan</a></h4>
                        <a class="cate" href="#">Accumulation</a>
                    </div>
                </div>
                <div class="item-project">
                    <img src="images/Project/7.jpg" class="img-responsive" alt="Image">
                    <div class="overlay-project">
                        <h4><a href="#">Turnaround Consultingan</a></h4>
                        <a class="cate" href="#">Accumulation</a>
                    </div>
                </div>
                <div class="item-project">
                    <img src="images/Project/8.jpg" class="img-responsive" alt="Image">
                    <div class="overlay-project">
                        <h4><a href="#">Audit & Assurance</a></h4>
                        <a class="cate" href="#">Assurance</a>
                    </div>
                </div>
                <div class="item-project">
                    <img src="images/Project/9.jpg" class="img-responsive" alt="Image">
                    <div class="overlay-project">
                        <h4><a href="#">Strategic Planning</a></h4>
                        <a class="cate" href="#">Strategic</a>
                    </div>
                </div>
                <div class="item-project">
                    <img src="images/Project/10.jpg" class="img-responsive" alt="Image">
                    <div class="overlay-project">
                        <h4><a href="#">Enterprise Loan</a></h4>
                        <a class="cate" href="#">Accumulation</a>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Relate Case --> --}}
@endsection