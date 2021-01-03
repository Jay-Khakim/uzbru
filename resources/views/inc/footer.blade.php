<!-- Footer -->
<footer class="f-bg-img cr-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-footer widget-footer-icon-link">
                    <div class="title-block title-on-dark title-xs">
                        <h4>@lang("Main Location")</h4>
                        <span class="bottom-title"></span>
                    </div>

                    <ul class="icon-link-list-icon">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>@lang("Republic of Uzbekistan, Tashkent city, Almazar district, Korakamish street, 8A")</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:admin@amwal.com">info@uzbru.com</a></li>
                        <li><i class="fa fa-headphones" aria-hidden="true"></i> <a href="mailto:admin@amwal.com">info@exportuz.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+998712070098"> +99871 207 00 98</a></li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:+998951454502"> +99895 145 45 02 </a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-footer widget-footer-hours">
                    <div class="title-block title-on-dark title-xs">
                        <h4>@lang("Working hours")</h4>
                        <span class="bottom-title"></span>
                    </div>
                    <p>@lang("You can contact us during the week").</p>
                    <dl class="dl-horizontal dl-working-hours">
                      <dt>@lang("Monday - Friday") </dt>
                      <dd>09.00  - 18.00 </dd>
                      <dt>@lang("Saturnday")   </dt>
                      <dd> 10.00  - 16.00  </dd>
                    </dl>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-footer widget-footer-list-link">
                    <div class="title-block title-on-dark title-xs">
                        <h4>@lang("Main sections")</h4>
                        <span class="bottom-title"></span>
                    </div>
                    <ul>
                        <li><a href="{{route('association', app()->getLocale())}}">@lang("Association")</a></li>
                        <li><a href="#">@lang("FAQ")</a></li>
                        <li><a href="#">@lang("Benefits")</a></li>
                        <li><a href="{{route('members', app()->getLocale())}}">@lang("List of members")</a></li>
                        <li><a href="#">@lang("Photos")</a></li>
                        <li><a href="#">@lang("Contacts")</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-footer widget-footer-subcri">
                    <div class="title-block title-on-dark title-xs">
                        <h4>@lang("Subscription")</h4>
                        <span class="bottom-title"></span>
                    </div>
                    <p>@lang("Subscribe to our newsletter for the latest news about our association")</p>
                    <form class="form-subcri-footer">
                      <div class="form-group">
                        <input type="email" class="form-control"   placeholder="@lang("Email Address")">
                      </div>
                      <button type="submit" class="btn-subcri-footer">@lang("Subscribe")</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="cr-h4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-warp cr-2">
                        <div class="copyright-text">
                            <p>© 2020 -@lang("Powered By <a href='https://mbmitcompany.uz/' target='_blank'><span>MBM IT COMPANY</span></a>")</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /copyright -->
</footer>	
<!-- /Footer -->