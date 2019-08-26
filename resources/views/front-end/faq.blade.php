<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/front-end/main.css')}}" id="main_style">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,800" rel="stylesheet">
    <link href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('css/slider.css')}}">--}}
    <title>{{setting('site.title')}}</title>
    @php $title_logo = Voyager::setting('site.logo', ''); @endphp
    <link rel="icon" href="{{asset('storage/'.$title_logo)}}" type="image/png">
    <link rel="stylesheet" href="{{asset('css/front-end/nav.css')}}">
@yield('css')
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143558094-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-143558094-1');
    </script>

</head>
<body>

<!--Main menu-->
<div class="menu">
    <div class="container menu__wrapper">
        <div class="row">
            <div class="menu__logo menu__item">
                <a href="/">
                    @php $site_logo = Voyager::setting('site.logo', ''); @endphp
                    <img class="menu__logo-img" style="max-width: 50px;height: auto"
                         src="{{asset('storage/'.$site_logo)}}" alt="">
                    <p class="menu__logo-title">{{setting('site.description')}}</p>
                </a>
            </div>
            <div class="menu__item d-t-none">
                <nav class="menu__center-nav">
                    {{menu('frontend', 'front-end.layouts.menu-desktop')}}
                </nav>
            </div>
        </div>



    </div>

</div>

<!--Main menu-->

<!--Mobile menu-->
<div class="mobile-menu d-none d-t-block">
    <div class="container">
        <div class="mobile-menu__logo">
            @php $site_logo = Voyager::setting('site.logo', ''); @endphp
            <img class="menu__logo-img" style="max-width: 100px;height: auto" src="{{asset('storage/'.$site_logo)}}"
                 alt="">
        </div>
        <button type="button" class="mobile-menu__close">
            <span><i class="mdi mdi-close" aria-hidden="true"></i></span>
        </button>
        <nav class="mobile-menu__wrapper">
            <ul class="mobile-menu__ul">
                {{menu('frontend', 'front-end.layouts.menu')}}
                @guest('investor')
                    <li><a class="site-btn site-btn--accent" href="{{ route('show.login')  }}">Login</a></li>
                @else
                    <div class="row">
                        <li>
                            <div class="menu__logo">
                                <div class="believe">
                                    <a href="{{route('dashboard.investor', Auth::guard('investor')->user()->id)}}">
                                        <img alt="{{Auth::guard('investor')->user()->name}}" class="believe__avatar" src="{{Auth::guard('investor')->user()->image}}"/>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <div>
                            <a class="link link--gray link--gray-active" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>

                    </div>
                @endguest
            </ul>
        </nav>
    </div>
</div>
<!--Mobile menu-->


<header class="header-home header-home--color">
    <div class="background background--wave">

        <div class="container background background--right background--features background--header"
             style="background-image: url({{asset('storage/'.$site_logo)}})">
            <div class="row">
                <div class="col-12">
                    <h2 class="header-home__title header-home__title--features">Why Central Java?<br/>Here is why.</h2>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="section section--first">
    <div class="container">

        <div class="row faq">
            <div id="top" class="col-9 col-t-12">
                @foreach($faqs as $faq)
                <div class="faq__content">
                    <div id="{{str_replace(' ', '', $faq->jenis->name)}}" class="faq__chapter chapter">
                        <h3 class="faq__chapter-title">{{$faq->jenis->name}}</h3>
                        <div class="faq__card card">
                            <h4 class="faq__card-title">{{$faq->question}}
                                <span class="faq__card-icon"><i class="mdi mdi-chevron-down"></i></span>
                            </h4>
                            <div class="faq__card-description">
                                <p>{{$faq->answer}}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                    @endforeach
            </div>

        </div>
    </div>

</section>



<!--Footer-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>© 2018 SIAP JATENG – Potensi Investasi dan Peluang Penanaman Modal | Made by
                    <a href="https://dpmptsp.jatengprov.go.id" class="link link--gray">DPMPTSP Provinsi Jawa Tengah</a></p>
            </div>
        </div>
    </div>
</div>
<!--Footer-->

{{--<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>--}}
<script src="{{asset('js/front-end/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/front-end/vendor/jquery.waypoints.js')}}"></script>
<script src="{{asset('js/front-end/menu.js')}}"></script>
<script src="{{asset('js/front-end/faq.js')}}"></script>
<script src="{{asset('js/front-end/sidebar.js')}}"></script>
<script src="{{asset('js/front-end/mobile-menu.js')}}"></script>

