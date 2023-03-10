<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>{{ setting('name.'.app()->getLocale()) }} @hasSection('title') | @yield('title') @endif</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="{{ setting('description.'.app()->getLocale()) }}" name="description" />
    <meta content="{{ setting('keyword.'.app()->getLocale()) }}" name="keywords" />
    <meta content="Gulfweb" name="author" />
    @if ( setting('logo.icon') )
    <link rel="icon" href="{{ setting('logo.icon') }}" name="favicon">
    @endif
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
    <![endif]-->
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('assets/css/bootstrap'.(app()->getLocale() == "ar" ? '-rtl' : '') .'.min.css') }}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{ asset('assets/css/bootstrap-grid'.(app()->getLocale() == "ar" ? '-rtl' : '') .'.min.css') }}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('assets/css/bootstrap-reboot'.(app()->getLocale() == "ar" ? '-rtl' : '') .'.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/coloring.css') }}" rel="stylesheet" type="text/css" />

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    @livewireStyles
</head>

<body @if ( app()->getLocale() == "ar" ) class="rtl" @endif>
<div id="wrapper">
    <div id="topbar" class="text-white bg-color">
        <div class="container">
            <div class="topbar-left sm-hide">
                @if( setting('address.'.app()->getLocale()) )
                    <span class="topbar-widget"><i class="fa fa-map-marker"></i>@if ( app()->getLocale() == "ar" ) &nbsp; @endif {{ setting('address.'.app()->getLocale()) }}</span>
                @endif
                @if( setting('Whats_app') )
                        <span class="topbar-widget"><i class="fa fa-whatsapp"></i><a href="http://wa.me/{{ setting('Whats_app') }}" target="_blank">@if ( app()->getLocale() == "ar" ) &nbsp; @endif <font dir="ltr">{{ setting('Whats_app') }}</font></a></span>
                @endif
            </div>
            <div class="topbar-right">
                <div class="topbar-right">

                    @if( setting('social.facebook') )
                        <span class="topbar-widget tb-social">
                            <a href="{{ setting('social.facebook') }}" target="_blank"><i class="fa fa-facebook fa-lg" style="color:#f8f8f8;"></i></a>
                        </span>
                    @endif
                    @if( setting('social.instagram') )
                        <span class="topbar-widget tb-social">
                            <a href="{{ setting('social.instagram') }}" target="_blank"><i class="fa fa-instagram fa-lg" style="color:#f8f8f8;"></i></a>
                        </span>
                    @endif
                    @if( setting('social.twitter') )
                        <span class="topbar-widget tb-social">
                            <a href="{{ setting('social.twitter') }}" target="_blank"><i class="fa fa-twitter fa-lg" style="color:#f8f8f8;"></i></a>
                        </span>
                    @endif
                    @if( setting('social.youtube') )
                        <span class="topbar-widget tb-social">
                            <a href="{{ setting('social.youtube') }}" target="_blank"><i class="fa fa-youtube fa-lg" style="color:#f8f8f8;"></i></a>
                        </span>
                    @endif
                    @if( setting('social.linkedIn') )
                        <span class="topbar-widget tb-social">
                            <a href="{{ setting('social.linkedIn') }}" target="_blank"><i class="fa fa-linkedin fa-lg" style="color:#f8f8f8;"></i></a>
                        </span>
                    @endif
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- header begin -->
    <header class="transparent scroll-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex sm-pt10">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{ url('/') }}">
                                    <img alt="{{ setting('name.'.app()->getLocale()) }}" class="logo" src="{{ setting('logo.light'.(app()->getLocale() == "ar" ? '_ar' : '')) }}" />
                                    <img alt="{{ setting('name.'.app()->getLocale()) }}" class="logo-2" src="{{ setting('logo.dark'.(app()->getLocale() == "ar" ? '_ar' : '')) }}" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col header-col-mid">
                            <!-- mainmenu begin -->
                            <ul id="mainmenu">
                                <li><a href="{{ route('index') }}">{{ trans('Home') }}</a></li>
                                @if ( setting('content.show.about_us' , true))
                                <li><a href="{{ route('about_us') }}">{{ trans('about_us') }}</a></li>
                                @endif
                                @if ( setting('content.show.services' , true))
                                <li><a href="{{ route('services') }}">{{ trans('services') }}</a></li>
                                @endif
                                @if ( setting('content.show.our_team' , true))
                                <li><a href="{{ route('our_team') }}">{{ trans('our_team') }}</a></li>
                                @endif
                                @if ( setting('content.show.client' , true))
                                <li><a href="{{ route('clients') }}">{{ trans('clients') }}</a></li>
                                @endif
                                @if ( setting('content.show.partner' , true))
                                <li><a href="{{ route('partners') }}">{{ trans('partners') }}</a></li>
                                @endif
                                @if ( setting('content.show.news' , true))
                                <li><a href="{{ route('news_events') }}">{!! trans('news_events') !!}</a></li>
                                @endif
                                @if ( setting('content.show.consultation' , true))
                                <li><a href="{{ route('consultation') }}">{{ trans('consultation') }}</a></li>
                                @endif
                                @if ( setting('content.show.contact_us' , true))
                                <li><a href="{{ route('contact_us') }}">{{ trans('contact_us') }}</a></li>
                                @endif
                                @if ( app()->getLocale() == "en")
                                <li class="arabic"><a href="{{ route('change_locale' , 'ar') }}">{{ trans('arabic') }}</a></li>
                                @else
                                <li class="english"><a href="{{ route('change_locale' , 'en') }}">{{ trans('english') }}</a></li>
                                @endif
                            </ul>
                            <!-- mainmenu close -->
                        </div>
                        <div class="de-flex-col">
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header close -->

    @yield('content')

    <!-- content close -->
    <a href="#" id="back-to-top"></a>
    <!-- footer begin -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <a href="{{ url('/') }}"><img alt="{{ setting('name.'.app()->getLocale()) }}" class="img-fluid mb20" src="{{ setting('logo.light'.(app()->getLocale() == "ar" ? '_ar' : '')) }}"></a>
                        <address class="s1">
                            @if( setting('address.'.app()->getLocale()) )
                                <span><i class="my-color fa fa-map-marker fa-lg"></i> {{ setting('address.'.app()->getLocale()) }}</span>
                            @endif
                            @if( setting('phone') )
                                    <span><i class="my-color fa fa-phone fa-lg"></i><a href="tel:{{ setting('Whats_app') }}" target="_blank"><font dir="ltr">{{ setting('phone') }}</font></a></span>
                            @endif
                            @if( setting('Whats_app') )
                                    <span><i class="my-color fa fa-whatsapp fa-lg"></i><a href="http://wa.me/{{ setting('Whats_app') }}" target="_blank"><font dir="ltr">{{ setting('Whats_app') }}</font></a></span>
                            @endif
                            @if( setting('email') )
                                <span><i class="my-color fa fa-envelope fa-lg"></i><a href="mailto:{{ setting('email') }}" target="_blank">{{ setting('email') }}</a></span>
                            @endif
                        </address>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5 class="my-color mb20">{{ trans('Quick_links') }}</h5>
                    <ul class="ul-style-2">

                        <li><a href="{{ route('index') }}">{{ trans('Home') }}</a></li>
                        @if ( setting('content.show.about_us' , true))
                            <li><a href="{{ route('about_us') }}">{{ trans('about_us') }}</a></li>
                        @endif
                        @if ( setting('content.show.services' , true))
                            <li><a href="{{ route('services') }}">{{ trans('services') }}</a></li>
                        @endif
                        @if ( setting('content.show.our_team' , true) and false)
                            <li><a href="{{ route('our_team') }}">{{ trans('our_team') }}</a></li>
                        @endif
                        @if ( setting('content.show.client' , true) and false)
                            <li><a href="{{ route('clients') }}">{{ trans('clients') }}</a></li>
                        @endif
                        @if ( setting('content.show.partner' , true) and false)
                            <li><a href="{{ route('partners') }}">{{ trans('partners') }}</a></li>
                        @endif
                        @if ( setting('content.show.news' , true))
                            <li><a href="{{ route('news_events') }}">{!! trans('news_events') !!}</a></li>
                        @endif
                        @if ( setting('content.show.consultation' , true) and false)
                            <li><a href="{{ route('consultation') }}">{{ trans('consultation') }}</a></li>
                        @endif
                        @if ( setting('content.show.contact_us' , true))
                            <li><a href="{{ route('contact_us') }}">{{ trans('contact_us') }}</a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="widget">
                        <h5 class="my-color">{{ trans('Location_Map') }}</h5>
                        <div id="map" style="width: 100%;height: 200px;border-radius: 5px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex">
                            <div class="de-flex-col">
                                @if( setting('copyright.'.app()->getLocale()) )
                                    {{ setting('copyright.'.app()->getLocale()) }}
                                @endif
                            </div>
                            <div class="de-flex-col">
                                <div class="social-icons">
                                    @if( setting('social.facebook') )
                                        <a href="{{ setting('social.facebook') }}" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                    @endif
                                    @if( setting('social.instagram') )
                                        <a href="{{ setting('social.instagram') }}" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                                    @endif
                                    @if( setting('social.twitter') )
                                        <a href="{{ setting('social.twitter') }}" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                    @endif
                                    @if( setting('social.youtube') )
                                        <a href="{{ setting('social.youtube') }}" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
                                    @endif
                                    @if( setting('social.linkedIn') )
                                        <a href="{{ setting('social.linkedIn') }}" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer close -->
    <div id="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>
<!-- Javascript Files
================================================== -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap'.(app()->getLocale() == "ar" ? '-rtl' : '').'.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/easing.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/validation.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/enquire.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.plugin.js') }}"></script>
<script src="{{ asset('assets/js/typed.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('assets/js/typed.js') }}"></script>
<script src="{{ asset('assets/js/designesia.js') }}"></script>

@if ( setting('location_lat') and setting('location_long') )
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin="" type="text/javascript"></script>
<script>
    window.onload = function() {
        var map = L.map('map').setView([ {{ setting('location_lat') }} , {{ setting('location_long') }} ], 12.5);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {}).addTo(map);
        L.marker([  {{ setting('location_lat') }} , {{ setting('location_long') }} ]).addTo(map);
    };
</script>
@endif


@hasSection('js')
    @yield('js')
@endif

@livewireScripts
</body>

</html>
