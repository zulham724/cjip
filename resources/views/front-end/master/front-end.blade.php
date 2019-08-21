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
    <link rel="stylesheet" href="{{asset('css/front-end/popup.css')}}">
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

<div class="button">
    <button><span>Click Me</span></button>
</div>

<div class="pop-up">
    <div class="content">
        <div class="container">
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>

            <span class="close">close</span>

            <div class="title">
                <h1>subscribe</h1>
            </div>

            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/256492/cXsiNryL.png" alt="Car">

            <div class="subscribe">
                <h1>Subscribe to get the latest <span>news &amp; updates</span>.</h1>

                <form>
                    <input type="email" placeholder="Your email address">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
</div>

<!--Main menu-->
<div class="menu">
    <div class="container menu__wrapper">
        <div class="row">
            <div class="col-md-10">
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
            <div class="col-md-2">
                <div class="menu__item">

                    <nav class="menu__right-nav d-t-none">
                        <ul>
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

                    <div class="d-none d-t-block">
                        <button type="button" class="menu__mobile-button">
                            <span><i class="mdi mdi-menu" aria-hidden="true"></i></span>
                        </button>
                    </div>
                </div>
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
            </ul>
        </nav>
    </div>
</div>
<!--Mobile menu-->



@yield('search')

<section class="section">

    <div class="container">
        <div class="row post">

                @yield('content')
            {{--<div id="app">
                <beautiful-chat :participants="participants"
                                :titleImageUrl="titleImageUrl"
                                :onMessageWasSent="onMessageWasSent"
                                :messageList="messageList"
                                :newMessagesCount="newMessagesCount"
                                :isOpen="isChatOpen"
                                :close="closeChat"
                                :open="openChat"
                                :showEmoji="true"
                                :showFile="true"
                                :showTypingIndicator="showTypingIndicator"
                                :colors="colors"
                                :alwaysScrollToBottom="alwaysScrollToBottom"
                                :messageStyling="messageStyling"
                                @onType="handleOnType">
                </beautiful-chat>
            </div>--}}
                <!--Start of Tawk.to Script-->
                    <script type="text/javascript">
                        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                        (function(){
                            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                            s1.async=true;
                            s1.src='https://embed.tawk.to/5cea3c972135900bac1288af/default';
                            s1.charset='UTF-8';
                            s1.setAttribute('crossorigin','*');
                            s0.parentNode.insertBefore(s1,s0);
                        })();
                    </script>
                    <!--End of Tawk.to Script-->
            <!--Right Info-->
                @yield('right')
        </div>
        <hr>
    </div>
</section>




<!--Footer menu-->
{{--<div class="container footer-menu">
    <div class="row">
        <div class="col-12">
            <a href="../index.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                    <path data-name="Sigma symbol" class="svg-element"
                          d="M237.418,8583.56a12.688,12.688,0,0,0,.419-3.37c-0.036-5.24-2.691-9.68-7.024-13.2h-3.878a20.819,20.819,0,0,1,4.478,13.01c0,4.56-2.456,10.2-6.413,11.4a16.779,16.779,0,0,1-2.236.51c-10.005,1.55-14.109-17.54-9.489-23.31,2.569-3.21,6.206-4.08,11.525-4.08h17.935A24.22,24.22,0,0,1,237.418,8583.56Zm-12.145-24.45c-8.571.02-12.338,0.98-16.061,4.84-6.267,6.49-6.462,20.69,4.754,27.72a24.092,24.092,0,1,1,27.3-32.57h-16v0.01Z"
                          transform="translate(-195 -8544)"/>
                </svg>
            </a>
            <nav class="footer-menu__nav">
                <ul>
                    <li><a href="../07_about.html" class="link link--gray">About</a></li>
                    <li><a href="../08_faq.html" class="link link--gray">FAQ</a></li>
                    <li><a href="../09_privacy.html" class="link link--gray">Privacy</a></li>
                    <li><a href="12_blog.html" class="link link--gray">Blog</a></li>
                </ul>
            </nav>
            <p class="footer-menu__social">
                <a class="link link--gray" href="">
                    <i class="mdi mdi-twitter" aria-hidden="true"></i>
                </a>
                <a class="link link--gray" href="">
                    <i class="mdi mdi-facebook" aria-hidden="true"></i>
                </a>
                <a class="link link--gray" href="">
                    <i class="mdi mdi-linkedin" aria-hidden="true"></i>
                </a>
                <a class="link link--gray" href="">
                    <i class="mdi mdi-instagram" aria-hidden="true"></i>
                </a>
            </p>
        </div>
    </div>
</div>--}}
<!--Footer menu-->



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
<!--Selects-->
<script src="{{asset('js/front-end/vendor/jquery-editable-select.min.js')}}"></script>
<script src="{{asset('js/front-end/vendor/slick.min.js')}}"></script>
<!--Instagram-->
<script src="{{asset('js/front-end/vendor/lightwidget.js')}}"></script>

<script src="{{asset('js/front-end/menu.js')}}"></script>
<script src="{{asset('js/front-end/mobile-menu.js')}}"></script>
<script src="{{asset('js/front-end/blog/blog.js')}}"></script>
<script src="{{asset('js/front-end/blog/post.js')}}"></script>
<script src="{{asset('js/front-end/carousel.js')}}"></script>
<script src="{{asset('js/front-end/style-switcher.js')}}"></script>
<script src="{{asset('js/front-end/chart/highchart.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
{{--<script src="{{mix('js/app.js')}}"></script>--}}
@php $img_broke = Voyager::setting('site.not_found', ''); @endphp
<script>
    var gambar = '{{asset('storage/'.$img_broke)}}';
    console.log(gambar);
    $('img').on("error", function() {
        $(this).attr('src', gambar);
    });
</script>
<script>
    $('button').click(function(){
        $('.pop-up').addClass('open');
    });

    $('.pop-up .close').click(function(){
        $('.pop-up').removeClass('open');
    });
</script>
@yield('js')
</body>
</html>
