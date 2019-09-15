<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! SEO::generate() !!}

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/front-end/main.css')}}" id="main_style">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,800" rel="stylesheet">
    <link href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('css/slider.css')}}">--}}
    <title>{{setting('site.title')}}</title>
    @php $title_logo = Voyager::setting('site.logo', ''); @endphp
    <link rel="icon" href="{{asset('storage/'.$title_logo)}}" type="image/png">
    <link rel="stylesheet" href="{{asset('css/front-end/nav.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    @yield('css')
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143558094-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-143558094-1');
    </script>
    <style>
        .language { position: absolute; top: 5px; right: 5px; padding: 20px; }
        .english { display: inline; }
        .indo { display: none; }
    </style>

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
                    <p class="menu__logo-title">
                        {{setting('site.title')}}
                    </p>
                </a>
            </div>
            <div class="menu__item d-t-none">
                <nav class="menu__center-nav">
                    {{menu('frontend', 'front-end.layouts.menu-desktop')}}
                </nav>
            </div>
            <div class="menu__item">
                <div class="d-none d-t-block">
                    <button type="button" class="menu__mobile-button">
                        <span><i class="mdi mdi-menu" aria-hidden="true"></i></span>
                    </button>
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
            <img class="menu__logo-img" style="max-width: 50px;height: auto" src="{{asset('storage/'.$site_logo)}}"
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

@yield('header')
@yield('search')

@yield('content')
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


@yield('footer')
<div class="container footer-menu">
    <div class="row">
        <div class="col-12">
            <a href="/">
                <img style="max-width: 50px;height: auto" src="{{asset('storage/'.$site_logo)}}" alt="">
            </a>
            <nav class="footer-menu__nav">
                <ul>
                    <li><a href="/how-can-we-help" class="link link--gray">FAQ</a></li>
                    <li><a href="{{route('ready-to-offer')}}" class="link link--gray">Ready to Offer</a></li>
                    <li><a href="{{route('prospective-project')}}" class="link link--gray">Prospective</a></li>
                    <li><a href="{{route('potential-project')}}" class="link link--gray">Potential</a></li>
                    <li><a href="{{route('frontend.cjibf')}}" class="link link--gray">CJIBF</a></li>
                </ul>
            </nav>
            <p class="footer-menu__social">
                <a class="link link--gray" href="https://twitter.com/DPMPTSPJateng">
                    <i class="mdi mdi-twitter" aria-hidden="true"></i>
                </a>
                <a class="link link--gray" href="https://www.facebook.com/dinas.pmptsp.96">
                    <i class="mdi mdi-facebook" aria-hidden="true"></i>
                </a>
                <a class="link link--gray" href="https://www.instagram.com/ptspjateng/">
                    <i class="mdi mdi-instagram" aria-hidden="true"></i>
                </a>
            </p>
        </div>
    </div>
</div>
<!--Footer menu-->

<hr>

<!--Footer-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>© 2019 CJIP | Central Java Investment Platform | Made by
                    <a href="https://dpmptsp.jatengprov.go.id" class="link link--gray">DPMPTSP Provinsi Jawa Tengah</a></p>
            </div>
        </div>
    </div>
</div>
<!--Footer-->
<!--Footer-->

<!--Footer-->


{{--<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>--}}
<script src="{{asset('js/front-end/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/front-end/vendor/jquery.waypoints.js')}}"></script>
<script src="{{asset('js/front-end/menu.js')}}"></script>
<script src="{{asset('js/front-end/topbar.js')}}"></script>
<script src="{{asset('js/front-end/mobile-menu.js')}}"></script>
<script src="{{asset('js/front-end/style-switcher.js')}}"></script>
<script>

    $(document).ready(function(){
        $("#selectID").click(function(){
            $("#menuEn").hide();
            $("#menuId").show();
            $("#headerId").show();
            $("#contentId").show();
            $("#headerEn").hide();
            $("#contentEn").hide();
        });
        $("#selectENi").click(function(){
            $("#menuId").hide();
            $("#menuEn").show();
            $("#headerEn").show();
            $("#contentEn").show();
            $("#headerId").hide();
            $("#contentId").hide();
        });
    });


</script>
@yield('js')
