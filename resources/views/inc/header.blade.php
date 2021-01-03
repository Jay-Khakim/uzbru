<!-- Mobile Menu -->
<nav id="menu">
    <ul>
        <li class="active">
            <a href="{{route('home', app()->getLocale())}}">@lang("Main")</a>
        </li>
        <li><a href="{{route('association', app()->getLocale())}}">@lang("Association")</a>
            <ul >

                <li><a href="{{route('association', app()->getLocale())}}" ><span>@lang("History")</span></a>
                </li>
                <li><a href="{{route('about', app()->getLocale())}}" ><span>@lang("About Us")</span></a>
                </li>
                <li><a href="{{route('services', app()->getLocale())}}" ><span>@lang("Services")</span></a>
                </li>
                <li><a href="{{route('team', app()->getLocale())}}" ><span>@lang("Staff")</span></a>
                <li><a href="{{route('branches', app()->getLocale())}}" ><span>@lang("Branches")</span></a>
            </ul>
        </li>
        <li>
            <a href="{{route('bemember', app()->getLocale())}}">@lang("Membership") </a>
            <ul >
                <li ><a  href="{{route('bemember', app()->getLocale())}}">@lang("Become a member")</a></li>
                <li ><a  href="{{route('members', app()->getLocale())}}">@lang("List of members")</a></li>
                <li ><a  href="checkmembers.php">@lang("Check for membership")</a></li>
            </ul>
        </li>
        <li>
            <a href="comments.php">@lang("Information")</a>
            <ul >
                <li><a href="comments.php">@lang("Feedbacks")</a></li>
                <li><a href="partners.php">@lang("Partners")</a></li>
                <li><a href="faq.php">@lang("FAQ")</a></li>
            </ul>
        </li>
        <li>
            <a href="news.php">@lang("News")</a>
            <ul >
                <li><a href="news.php">@lang("General News")</a></li>
                <li ><a  href="news-2.php">@lang("Association News")</a></li>
            </ul>
        </li>
        <li>
            <a href="photo.php">@lang("Media")</a>
            <ul >
                <li ><a  href="photo.php">@lang("Photos")</a></li>
                <li ><a  href="video.php">@lang("Video")</a></li>
                
            </ul>
        </li>
        <li><a href="contact.php">@lang("Contacts")</a></li>
    </ul>
</nav>
<!-- /Mobile Menu -->
<header class="header-3-fix" >
    <div class="nav-warp nav-warp-h3">
        <div class="navi-warp-home-3">
            <a href="{{route('home', app()->getLocale())}}" class="logo"><img src="/images/Logo-on-dark.png" class="img-responsive" alt="Image"></a>
            
            <div class="tb-social-lan language">
                <a href="tel:+998712070098"><i class="fa fa-phone" aria-hidden="true"></i>+998(71)2070098</a>
                <select class="lang">
                    @yield('language')
                </select>
                <ul>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="twitter"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="google plus"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <nav>
                        <ul class="navi-level-1 active-subcolor">
                            <li class="active">
                                <a href="{{route('home', app()->getLocale())}}">@lang("Main")</a>
                            </li>
                            <li><a href="{{route('association', app()->getLocale())}}">@lang("Association")</a>
                                <ul class="navi-level-2">

                                    <li><a href="{{route('association', app()->getLocale())}}" ><span>@lang("History")</span></a>
                                    </li>
                                    <li><a href="{{route('about', app()->getLocale())}}" ><span>@lang("About Us")</span></a>
                                    </li>
                                    <li><a href="{{route('services', app()->getLocale())}}" ><span>@lang("Services")</span></a>
                                    </li>
                                    <li><a href="{{route('team', app()->getLocale())}}" ><span>@lang("Staff")</span></a>
                                    </li>
                                    <li><a href="{{route('branches', app()->getLocale())}}" ><span>@lang("Branches")</span></a>	
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('bemember', app()->getLocale())}}">@lang("Membership")</a>
                                <ul class="navi-level-2">
                                    <li ><a  href="{{route('bemember', app()->getLocale())}}">@lang("Become a member")</a></li>
                                    <li ><a  href="{{route('members', app()->getLocale())}}">@lang("List of members")</a></li>
                                    <li ><a  href="checkmembers.php">@lang("Check for membership")</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="comments.php">@lang("Information")</a>
                                <ul class="navi-level-2">
                                    <li><a href="comments.php">@lang("Feedbacks")</a></li>
                                    <li><a href="partners.php">@lang("Partners")</a></li>
                                    <li><a href="faq.php">@lang("FAQ")</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="news.php">@lang("News")</a>
                                <ul class="navi-level-2">
                                    <li><a href="news.php">@lang("General News")</a></li>
                                    <li ><a  href="news-2.php">@lang("Association News")</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="photo.php">@lang("Media")</a>
                                <ul class="navi-level-2">
                                    
                                    <li ><a  href="photo.php">@lang("Photos")</a></li>
                                    <li ><a  href="video.php">@lang("Video")</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">@lang("Contacts")</a></li>
                        </ul>
                    </nav>
            <a href="#menu" class="btn-menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- /nav -->
</header>