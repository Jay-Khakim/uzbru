@extends('layouts.app')
@section('title')
    <title>@lang("Branches") | O'zBRU</title> 
@endsection
@section('content')
<section class="no-padding sh-contact">
    <div class="sub-header ">
        <span>@lang("OUR OFFICES IN THE WORLD")</span>
        <h3>@lang("OUR BRANCHES")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             
             <li class="active">@lang("Branches")</li>
         </ol>
    </div>
</section>
<!-- /subheader -->

<section>
    <div class="container">
        <img src="http://placehold.it/921x504/ccc.jpg" class="img-responsive img-branches" alt="Image">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="item-locaition item-branche" >
                <h3>Miami Office</h3>
                <div class="inner-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1 1234-456-789</p>
                    <p><i class="fa fa-envelope-square" aria-hidden="true"></i>admin@amwal.com</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-locaition item-branche" >
                <h3>Florida Office</h3>
                <div class="inner-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1 1234-456-789</p>
                    <p><i class="fa fa-envelope-square" aria-hidden="true"></i>admin@amwal.com</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-locaition item-branche" >
                <h3>Illinois Office</h3>
                <div class="inner-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1 1234-456-789</p>
                    <p><i class="fa fa-envelope-square" aria-hidden="true"></i>admin@amwal.com</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-locaition item-branche" >
                <h3>New York Office</h3>
                <div class="inner-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1 1234-456-789</p>
                    <p><i class="fa fa-envelope-square" aria-hidden="true"></i>admin@amwal.com</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-locaition item-branche" >
                <h3>Los Angeles Office</h3>
                <div class="inner-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1 1234-456-789</p>
                    <p><i class="fa fa-envelope-square" aria-hidden="true"></i>admin@amwal.com</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-locaition item-branche" >
                <h3>Chicago Office</h3>
                <div class="inner-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1 1234-456-789</p>
                    <p><i class="fa fa-envelope-square" aria-hidden="true"></i>admin@amwal.com</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-locaition item-branche" >
                <h3>Houston Office</h3>
                <div class="inner-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1 1234-456-789</p>
                    <p><i class="fa fa-envelope-square" aria-hidden="true"></i>admin@amwal.com</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-locaition item-branche" >
                <h3>Philadelphia Office</h3>
                <div class="inner-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1 1234-456-789</p>
                    <p><i class="fa fa-envelope-square" aria-hidden="true"></i>admin@amwal.com</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-locaition item-branche" >
                <h3>Phoenix Office</h3>
                <div class="inner-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1 1234-456-789</p>
                    <p><i class="fa fa-envelope-square" aria-hidden="true"></i>admin@amwal.com</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-locaition item-branche" >
                <h3>San Antonio Office</h3>
                <div class="inner-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1 1234-456-789</p>
                    <p><i class="fa fa-envelope-square" aria-hidden="true"></i>admin@amwal.com</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-locaition item-branche" >
                <h3>Los Angeles Office</h3>
                <div class="inner-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1 1234-456-789</p>
                    <p><i class="fa fa-envelope-square" aria-hidden="true"></i>admin@amwal.com</p>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-locaition item-branche" >
                <h3>Chicago Office</h3>
                <div class="inner-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pellentesque habitant morbi tristique senectus et netus et malesuada </p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1 1234-456-789</p>
                    <p><i class="fa fa-envelope-square" aria-hidden="true"></i>admin@amwal.com</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Branches -->
@endsection