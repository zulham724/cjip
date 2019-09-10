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
    var languageSelect = document.getElementById('LanguageSelect');
    var selectedLanguage = readCookie('language');

    if ((selectedLanguage == 'english') || (selectedLanguage == 'spanish')) {
        $(".language select").val(selectedLanguage);
        var sel = $(".language select").val(selectedLanguage);
        if (selectedLanguage == 'english') {
            $(".english").css("display", "inline");
            $(".spanish").css("display", "none");
            $(".portuguese").css("display", "none");
        }else if (selectedLanguage =='spanish') {
            $(".english").css("display", "none");
            $(".spanish").css("display", "inline");
            $(".portuguese").css("display", "none");
        }else if (selectedLanguage =='portuguese') {
            $(".english").css("display", "none");
            $(".spanish").css("display", "none");
            $(".portuguese").css("display", "inline");
        }
    }

    $(".language select").bind('change', function() {
        //on change set cookie and...
        setCookie('language', this.value, 365);

        //change css depending on what is selected
        var sel = $(".language select").val();
        if (sel=='english') {
            $(".english").css("display", "inline");
            $(".spanish").css("display", "none");
            $(".portuguese").css("display", "none");
        }else if (sel=='spanish') {
            $(".english").css("display", "none");
            $(".spanish").css("display", "inline");
            $(".portuguese").css("display", "none");
        }else if (sel=='portuguese') {
            $(".english").css("display", "none");
            $(".spanish").css("display", "none");
            $(".portuguese").css("display", "inline");

        }


    });

    function saveLanguage(cookieValue)
    {
        var sel = document.getElementById('LanguageSelect');
        setCookie('language', cookieValue, 365);
    }

    function setCookie(cookieName, cookieValue, nDays) {
        var today = new Date();
        var expire = new Date();

        if (nDays==null || nDays==0)
            nDays=1;

        expire.setTime(today.getTime() + 3600000*24*nDays);
        document.cookie = cookieName+"="+escape(cookieValue) + ";expires="+expire.toGMTString();
    }

    function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
</script>
@yield('js')
