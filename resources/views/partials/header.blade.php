<header id="header_main" class="header_1 header-fixed style-white">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div id="site-header-inner">
                    <div class="wrap-box flex">
                        <div id="site-logo">
                            <div id="site-logo-inner">
                                <a href="{{ route('home') }}" rel="home" class="main-logo">
                                    <img id="logo_header" src="{{ asset('assets/images/logo/logo-dark.png') }}"
                                        data-retina="{{ asset('assets/images/logo/logo-dark@2x.png') }}">
                                </a>
                            </div>
                        </div><!-- logo -->
                        <div class="mobile-button">
                            <span></span>
                        </div><!-- /.mobile-button -->

                        <nav id="main-nav" class="main-nav">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item">
                                    <a href="about-us.html">Sewa Lapangan</a>
                                </li>
                                <li class="menu-item">
                                    <a href="about-us.html">Main Bareng</a>
                                </li>
                                <li class="menu-item">
                                    <a href="about-us.html">Market Place</a>
                                </li>
                                <li class="menu-item">
                                    <a href="about-us.html">Video Replay</a>
                                </li>
                            </ul>
                        </nav><!-- /#main-nav -->

                        @auth
                            @include('partials.account-web')
                        @else
                            @include('partials.btn-login-web')
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav-wrap">
        <div class="overlay-mobile-nav"></div>
        <div class="inner-mobile-nav">
            <a href="index.html" rel="home" class="main-logo">
                <img id="mobile-logo_header" src="{{ asset('assets/images/logo/logo.png') }}"
                    data-retina="{{ asset('assets/images/logo/logo-dark@2x.png') }}">
            </a>
            <div class="mobile-nav-close">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white"
                    x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88"
                    enable-background="new 0 0 122.878 122.88" xml:space="preserve">
                    <g>
                        <path
                            d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z" />
                    </g>
                </svg>
            </div>
            <nav id="mobile-main-nav" class="mobile-main-nav">
                <ul id="menu-mobile-menu" class="menu">
                    <li class="menu-item">
                        <a class="item-menu-mobile" href="about-us.html">Sewa Lapangan</a>
                    </li>
                    <li class="menu-item">
                        <a class="item-menu-mobile" href="about-us.html">Main Bareng</a>
                    </li>
                    <li class="menu-item">
                        <a class="item-menu-mobile" href="about-us.html">Video Replay</a>
                    </li>
                    @auth
                        @include('partials.account-mob')
                    @else
                        @include('partials.btn-login-mob')
                    @endauth
                </ul>
            </nav>
        </div>
    </div>
</header>
