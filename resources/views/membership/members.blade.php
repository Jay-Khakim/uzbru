@extends('layouts.app')
@section('title')
<title>@lang("List of members") | O'zBRU</title>
    
@endsection
@section('content')
<section class="no-padding sh-company-history">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("List of members")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             <li>
                 <a href="{{route('bemember', app()->getLocale())}}">@lang("Membership")</a>
             </li>
             <li class="active">@lang("List of members")</li>
         </ol>
    </div>
</section>
<!-- /Sub HEader -->

<section>
    <div class="container">
        <div class="row">
            <div class="shop-page-warp">
                <div class="col-md-12">
                    <div class="group-title-btn">
                        <div class="title-block">
                            <h3>@lang("List of members")</h3>
                            <span class="bottom-title"></span>
                        </div>
                    </div>
                </div>
                <div class="list-product">
                    @foreach ($members as $member)
                        <div class="col-md-3 col-sm-6">
                            <div class="product-item">
                                <figure >
                                    <a href="{{route('single-member', [app()->getLocale(), $member->id])}}">
                                        <img src="/storage/{{$member->image}}" class="img-responsive" alt="Image">
                                    </a>
                                </figure>
                                <div class="product-detail">
                                    <h3 align="center"><a href="{{route('single-member', [app()->getLocale(), $member->id])}}">{{$member->name}}</a></h3>
                                    <span class="price">
                                        @if ($member->status == "active")
                                            <span class="amount" style="color: green">@lang("Status"): {{$member->status}}</span> 
                                            
                                        @endif
                                        @if ($member->status == "inactive")
                                            <span class="amount" style="color: red">@lang("Status"): {{$member->status}}</span> 
                                            
                                        @endif
                                    </span>
                                
                                </div>
                                <div class="btn">
                                    <a href="{{route('single-member', [app()->getLocale(), $member->id])}}" class="ot-btn btn-main-color">
                                    <i class="fa fa-eye" aria-hidden="true"></i> @lang("More")
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$members->links()}}

                {{-- <div class="col-md-12">
                    <ul class="pagination">
                        <li><a href="#">PREVIOUS</a></li>
                        <li><a href="#">NEXT</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</section>
@endsection