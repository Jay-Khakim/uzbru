@extends('layouts.app')
@section('title')
    <title>@lang("Contacts") | O'zBRU</title>
@endsection
@section('content')
<section class="no-padding sh-contact">
    <div class="sub-header ">
        <span>@lang("Contacts")</span>
        <h3>@lang("Contact us")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             
             <li class="active">@lang("Contacts")</li>
         </ol>
    </div>
</section>
<!-- /subheader -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="iconbox-inline">
                    <span class="icon icon-location2"></span>
                    <h4>@lang("Our address")</h4>
                    <p>@lang("Republic of Uzbekistan, Tashkent city, Almazar district, Korakamish street, 8A")</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="iconbox-inline">
                    <span class="icon icon-phone"></span>
                    <h4>@lang("Phone number")</h4>
                    <p>+99895 145 45 02<br>
                    +99871 207 00 98</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="iconbox-inline">
                    <span class="icon icon-envelop"></span>
                    <h4>@lang("Email Address")</h4>
                    <p>info@uzbru.com<br>
                       info@exportuz.com
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Iconbxo -->
<div id="map-canvas" class="map-warp" style="height: 0px;"></div>
<!-- /Map -->
<div class="fluit" style="margin-bottom: -10px;">
<iframe align="center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d650.2518319499841!2d69.21856252920595!3d41.355331205372956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8d4e64adf79d%3A0x3a39127fd8ff297b!2sO%E2%80%99zbekiston%20Eksportchilar%20Uyushmasi!5e1!3m2!1suz!2s!4v1590062066869!5m2!1suz!2s" style="width: 100% ; height: 400px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<section>
    <div class="container">	
        <div class="row">
            <div class="col-md-12">
                <div class="title-block title-contact">
                    <h3>@lang("Send message")</h3>
                    <span class="bottom-title"></span>
                </div>
            </div>
            <div class="form-contact-warp">
                <form name="contactform" method="post" action="send_form_email.php">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="first_name" placeholder="@lang("Full Name")">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="email" placeholder="@lang("Email Address")">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="subject" placeholder="@lang("Subject")">
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="comments" class="form-control" rows="5" placeholder="@lang("Comment")"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <button type="submit" class="btn-main-color"><i class="fa fa-paper-plane" aria-hidden="true"></i> @lang("Send")</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /Form Contact -->
@endsection