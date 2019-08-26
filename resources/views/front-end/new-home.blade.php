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

<section class="section">
    <div class="topbar-wrapper">
        <nav class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-2 topbar__item">
                        <a class="link link--gray topbar__link active" href="#freetrial">Economic Growth</a>
                    </div>
                    <div class="col-2 topbar__item">
                        <a class="link link--gray topbar__link" href="#nosetup">Investment Performance</a>
                    </div>
                    <div class="col-2 topbar__item">
                        <a class="link link--gray topbar__link" href="#safety">Award</a>
                    </div>
                    <div class="col-2 topbar__item">
                        <a class="link link--gray topbar__link" href="#optimized">Supporting Infrastructure</a>
                    </div>
                    <div class="col-2 topbar__item">
                        <a class="link link--gray topbar__link" href="#access">Minimum Wages</a>
                    </div>
                    <div class="col-2 topbar__item">
                        <a class="link link--gray topbar__link" href="#support">Investment Cost</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container jsfeatures">
        <div id="freetrial" class="row about-app about-app--reverse">
            <div class="col-6 about-app__description">
                <div class="about-app__description-content">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="120" height="120"
                         viewBox="0 0 120 120">
                        <rect class="svg-bg" width="120" height="120"/>
                        <path class="svg-light-gray"
                              d="M12,20a2,2,0,0,1,2,2V34a2,2,0,0,1-4,0V22A2,2,0,0,1,12,20ZM6,26H18a2,2,0,0,1,0,4H6A2,2,0,0,1,6,26ZM8,72a2,2,0,0,1,2,2V86a2,2,0,0,1-4,0V74A2,2,0,0,1,8,72ZM2,78H14a2,2,0,0,1,0,4H2A2,2,0,0,1,2,78Zm98,14a2,2,0,0,1,2,2v12a2,2,0,0,1-4,0V94A2,2,0,0,1,100,92Zm-6,6h12a2,2,0,0,1,0,4H94A2,2,0,0,1,94,98ZM60,20A40,40,0,1,1,20,60,40,40,0,0,1,60,20Z"/>
                        <g>
                            <rect class="svg-dark-gray" x="36" y="20" width="44" height="80" rx="4" ry="4"/>
                            <path class="svg-white"
                                  d="M40,30H76a2,2,0,0,1,2,2V86a2,2,0,0,1-2,2H40a2,2,0,0,1-2-2V32A2,2,0,0,1,40,30ZM58.5,91.25a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,58.5,91.25Z"/>
                        </g>
                        <g id="label">
                            <circle id="circle-2" data-name="circle" class="svg-element" cx="58" cy="59" r="16"/>
                            <image id="Free" x="46" y="55" width="23" height="8"
                                   xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAICAMAAAAldJTcAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAM1BMVEUAAAD///////////////////////////////////////////////////////////8AAAC3K8SQAAAAD3RSTlMAVSJm3arMiLsR7ndEmTPX6l4jAAAAAWJLR0QAiAUdSAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAFtJREFUCNdtjVEOgDAIQ7vBkMkm97+tYGaixn6Q5oX0oXim4hti/Gbx1piruG9R3bWDcmaHcocawMMaMO3+D9YvE0ne+eJHNrHnfm7oBOywAINQljd4erWmV8YJJGkDageXzLEAAAAASUVORK5CYII="/>
                        </g>
                    </svg>
                    <h4 class="about-app__description-title">Economic Growth</h4>

                        <p>Tahun : {{$ekonomis[0]->tahun}}</p><br>
                        <p>Nilai Pertumbuhan : {{$ekonomis[0]->pertumbuhan}}</p><br>
                        <hr>
                </div>
            </div>
            <div class="col-6 about-app__img about-app__img--left">
                <div class="about-app__img-wrap">
                    <img alt="" src="{{'storage/'.Voyager::setting('site.not_found')}}">
                </div>
            </div>
        </div>
        <div id="nosetup" class="row about-app">
            <div class="col-6 about-app__description">
                <div class="about-app__description-content about-app__description-content--left">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="120" height="120"
                         viewBox="0 0 120 120">
                        <rect class="svg-bg" width="120" height="120"/>
                        <path class="svg-light-gray"
                              d="M36,6H48a2,2,0,0,1,0,4H36A2,2,0,0,1,36,6Zm6-6a2,2,0,0,1,2,2V14a2,2,0,0,1-4,0V2A2,2,0,0,1,42,0ZM16,110H28a2,2,0,0,1,0,4H16A2,2,0,0,1,16,110Zm6-6a2,2,0,0,1,2,2v12a2,2,0,0,1-4,0V106A2,2,0,0,1,22,104Zm70-6h12a2,2,0,0,1,0,4H92A2,2,0,0,1,92,98Zm6-6a2,2,0,0,1,2,2v12a2,2,0,0,1-4,0V94A2,2,0,0,1,98,92ZM60,20A40,40,0,1,1,20,60,40,40,0,0,1,60,20Z"/>
                        <g id="speed">
                            <path id="scale" class="svg-dark-gray"
                                  d="M60,31h0A33,33,0,0,1,93,64v2.818A3.182,3.182,0,0,1,89.818,70H30.182A3.182,3.182,0,0,1,27,66.818V64A33,33,0,0,1,60,31Z"/>
                            <path id="max" class="svg-element"
                                  d="M83.671,41.019A32.883,32.883,0,0,1,93,64v2.818A3.182,3.182,0,0,1,89.818,70H60V64.69Z"/>
                            <circle class="svg-gray" cx="60" cy="64" r="25"/>
                            <image id="arrow" x="53" y="57" width="30" height="14"
                                   xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAOCAMAAAAPOFwLAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAgVBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8AAABdYQRBAAAAKXRSTlMAFIbS+NCCU/Dx/hX1waOHbE4yFtzAaxOS9ti8oYNnTC4QaFTy0/r0zpnURg4AAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAAAgUlEQVQY05WRUQ6CMBBEBylgK4JQFEQqqKjs/S9IEGIa3TTh/b5kM7MDAN7GFyIIPbBEW/ogI9YqWlCM30n6Eu+T9JDl2tIh/SOKY5KesrwEAnJQQbh07NSqYo+f60tjrm13+4nmN+bedqWVXFvFpF77FuDRz7Zn7TTJ8/UeDDfJCDOoIidStO0EAAAAAElFTkSuQmCC"/>
                        </g>
                    </svg>
                    <h4 class="about-app__description-title">Investment Performance</h4>
                    <a href="http://web.dpmptsp.jatengprov.go.id/statistik_realisasi" class="site-btn site-btn--accent site-btn--right native__btn-first">
                            See Here</a>
                </div>
            </div>
            <div class="col-6 about-app__img">
                <div class="about-app__img-wrap">
                    <img alt="" src="{{'storage/'.Voyager::setting('site.not_found')}}">
                </div>
            </div>
        </div>

        @foreach($awards as $award)
        <div id="safety" class="row about-app about-app--reverse">
            <div class="col-6 about-app__description">
                <div class="about-app__description-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120">
                        <rect class="svg-bg" width="120" height="120"/>
                        <path class="svg-light-gray"
                              d="M112,36a2,2,0,0,1,2,2V50a2,2,0,0,1-4,0V38A2,2,0,0,1,112,36Zm-6,6h12a2,2,0,0,1,0,4H106A2,2,0,0,1,106,42ZM8,8a2,2,0,0,1,2,2V22a2,2,0,0,1-4,0V10A2,2,0,0,1,8,8ZM2,14H14a2,2,0,0,1,0,4H2A2,2,0,0,1,2,14ZM20,92a2,2,0,0,1,2,2v12a2,2,0,0,1-4,0V94A2,2,0,0,1,20,92Zm-6,6H26a2,2,0,0,1,0,4H14A2,2,0,0,1,14,98ZM60,20A40,40,0,1,1,20,60,40,40,0,0,1,60,20Z"/>
                        <g id="shield">
                            <path id="shield_light" class="svg-light"
                                  d="M60.752,81.9A2.866,2.866,0,0,1,60,82V16a1.975,1.975,0,0,1,1.18.393c3.37,2.5,13.594,9.343,26.121,10.54A3,3,0,0,1,89.993,29.9C90.138,39.995,88.551,74.278,60.752,81.9Z"/>
                            <path id="shield_dark" class="svg-gray"
                                  d="M59.248,81.9A2.867,2.867,0,0,0,60,82V16a1.975,1.975,0,0,0-1.18.393c-3.37,2.5-13.594,9.343-26.121,10.54A3,3,0,0,0,30.007,29.9C29.862,39.995,31.449,74.278,59.248,81.9Z"/>
                        </g>
                        <g id="lock">
                            <path id="lock-2" data-name="lock" class="svg-element"
                                  d="M70,75.25H88a4,4,0,0,1,4,4V92a4,4,0,0,1-4,4H70a4,4,0,0,1-4-4V79.25A4,4,0,0,1,70,75.25Zm13.522,0v-4.61c0-2.864-1.712-5.186-4.522-5.186s-4.522,2.322-4.522,5.186v4.61H71.087V68.915A6.85,6.85,0,0,1,77.87,62H80.13a6.85,6.85,0,0,1,6.783,6.915v6.339H83.522Z"/>
                            <path id="hole" class="svg-white"
                                  d="M79,78.75A3.453,3.453,0,1,1,75.594,82.2,3.43,3.43,0,0,1,79,78.75ZM77.3,82.17H80.7l1.13,8.068H76.174Z"/>
                        </g>
                    </svg>

                    <h4 class="about-app__description-title">Award</h4>
                    <p>{{$award->nama}}</p><br>
                    <p>{{$award->nominasi}}</p><br>
                    <p>{{$award->tahun}}</p>
                </div>
            </div>
            <div class="col-6 about-app__img about-app__img--left">
                <div class="about-app__img-wrap">
                    <img alt="" src="@isset($award->foto) {{Voyager::image($award->foto)}} @else {{'storage/'.Voyager::setting('site.not_found')}}@endisset">
                </div>
            </div>
        </div>
        @endforeach

        <div id="optimized" class="row about-app">
            <div class="col-6 about-app__description">
                <div class="about-app__description-content about-app__description-content--left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120">
                        <rect class="svg-bg" width="120" height="120"/>
                        <path class="svg-light-gray"
                              d="M90,110h12a2,2,0,0,1,0,4H90A2,2,0,0,1,90,110Zm6-6a2,2,0,0,1,2,2v12a2,2,0,0,1-4,0V106A2,2,0,0,1,96,104ZM92,8h12a2,2,0,0,1,0,4H92A2,2,0,0,1,92,8Zm6-6a2,2,0,0,1,2,2V16a2,2,0,0,1-4,0V4A2,2,0,0,1,98,2ZM16,20H28a2,2,0,0,1,0,4H16A2,2,0,0,1,16,20Zm6-6a2,2,0,0,1,2,2V28a2,2,0,0,1-4,0V16A2,2,0,0,1,22,14Zm38,6A40,40,0,1,1,20,60,40,40,0,0,1,60,20Z"/>
                        <g>
                            <rect id="Прямоугольник_скругл._углы_2_копия_2" data-name="Прямоугольник, скругл. углы 2 копия 2"
                                  class="svg-dark-gray" x="38" y="20" width="44" height="80" rx="4" ry="4"/>
                            <path id="Эллипс_2_копия" data-name="Эллипс 2 копия" class="svg-white"
                                  d="M42,30H78a2,2,0,0,1,2,2V86a2,2,0,0,1-2,2H42a2,2,0,0,1-2-2V32A2,2,0,0,1,42,30ZM60.5,91.25a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,60.5,91.25Z"/>
                        </g>
                        <g id="UI">
                            <rect id="image" class="svg-light-gray" x="44" y="34" width="32" height="14" rx="2" ry="2"/>
                            <path id="text" class="svg-light"
                                  d="M46,52h4a2,2,0,0,1,0,4H46A2,2,0,0,1,46,52Zm0,8h4a2,2,0,0,1,0,4H46A2,2,0,0,1,46,60Z"/>
                            <path id="text-2" data-name="text" class="svg-gray"
                                  d="M56,52H74a2,2,0,0,1,0,4H56A2,2,0,0,1,56,52Zm0,8H74a2,2,0,0,1,0,4H56A2,2,0,0,1,56,60Z"/>
                            <path id="text-3" data-name="text" class="svg-dark-gray"
                                  d="M66,68h8a2,2,0,0,1,0,4H66A2,2,0,0,1,66,68Zm0,8h8a2,2,0,0,1,0,4H66A2,2,0,0,1,66,76Z"/>
                            <path id="text-4" data-name="text" class="svg-element"
                                  d="M52,68h8a2,2,0,0,1,0,4H52A2,2,0,0,1,52,68Zm0,8h8a2,2,0,0,1,0,4H52A2,2,0,0,1,52,76Z"/>
                        </g>
                    </svg>
                    <h4 class="about-app__description-title">Supporting Infrastructure</h4>
                    @foreach($infrastrukturs as $infrastruktur)
                        <li>{{$infrastruktur->nama_infrastruktur}}</li>
                    @endforeach
                </div>
            </div>
            <div class="col-6 about-app__img">
                <div class="about-app__img-wrap">
                    <img alt="" src="{{'storage/'.Voyager::setting('site.not_found')}}">
                </div>
            </div>
        </div>
        <div id="access" class="row about-app about-app--reverse">
            <div class="col-6 about-app__description">
                <div class="about-app__description-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120">
                        <rect class="svg-bg" width="120" height="120"/>
                        <path class="svg-light-gray"
                              d="M112,20a2,2,0,0,1,2,2V34a2,2,0,0,1-4,0V22A2,2,0,0,1,112,20Zm-6,6h12a2,2,0,0,1,0,4H106A2,2,0,0,1,106,26ZM8,16a2,2,0,0,1,2,2V30a2,2,0,0,1-4,0V18A2,2,0,0,1,8,16ZM2,22H14a2,2,0,0,1,0,4H2A2,2,0,0,1,2,22ZM20,92a2,2,0,0,1,2,2v12a2,2,0,0,1-4,0V94A2,2,0,0,1,20,92Zm-6,6H26a2,2,0,0,1,0,4H14A2,2,0,0,1,14,98ZM60,20A40,40,0,1,1,20,60,40,40,0,0,1,60,20Z"/>
                        <g id="login">
                            <rect class="svg-element" x="51" y="84" width="18" height="6" rx="3" ry="3"/>
                            <path id="input" class="svg-gray"
                                  d="M41,72H79a3,3,0,0,1,0,6H41A3,3,0,0,1,41,72Zm0-10H79a3,3,0,0,1,0,6H41A3,3,0,0,1,41,62Z"/>
                            <path id="user" class="svg-dark-gray"
                                  d="M60,32a5,5,0,1,1-5,5A5,5,0,0,1,60,32ZM58,42h4a7,7,0,0,1,7,7v3H51V49A7,7,0,0,1,58,42Z"/>
                        </g>
                    </svg>
                    <h4 class="about-app__description-title">Minimum Wages</h4>
                    <table>
                        <thead>
                        <tr>
                            <th>
                                Tahun
                            </th>
                            <th>
                                Nilai UMR
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($umks as $wage)
                        <tr>
                            <td>{{$wage->tahun}}</td>
                            <td>{{$wage->nilai_umr}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$umks->links('pagination.page')}}
                </div>
            </div>
            <div class="col-6 about-app__img about-app__img--left">
                <div class="about-app__img-wrap">
                    <img alt="" src="{{'storage/'.Voyager::setting('site.not_found')}}">
                </div>
            </div>
        </div>
        <div id="support" class="row about-app">
            <div class="col-6 about-app__description">
                <div class="about-app__description-content about-app__description-content--left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120">
                        <rect class="svg-bg" width="120" height="120"/>
                        <path class="svg-light-gray"
                              d="M8,72a2,2,0,0,1,2,2V86a2,2,0,0,1-4,0V74A2,2,0,0,1,8,72ZM2,78H14a2,2,0,0,1,0,4H2A2,2,0,0,1,2,78ZM112,92a2,2,0,0,1,2,2v12a2,2,0,0,1-4,0V94A2,2,0,0,1,112,92Zm-6,6h12a2,2,0,0,1,0,4H106A2,2,0,0,1,106,98Zm-6-82a2,2,0,0,1,2,2V30a2,2,0,0,1-4,0V18A2,2,0,0,1,100,16Zm-6,6h12a2,2,0,0,1,0,4H94A2,2,0,0,1,94,22ZM60,20A40,40,0,1,1,20,60,40,40,0,0,1,60,20Z"/>
                        <path id="headphones" class="svg-dark-gray"
                              d="M83,71a4,4,0,0,1-4-4V59h0a19,19,0,0,0-38,0V71a8,8,0,0,0,8,8h5.779A2.981,2.981,0,0,1,57,78h6a3,3,0,0,1,0,6H57a2.981,2.981,0,0,1-2.221-1H47A10,10,0,0,1,37,73V71a4,4,0,0,1-4-4V61a4,4,0,0,1,4-4h0.1a22.985,22.985,0,0,1,45.8,0H83a4,4,0,0,1,4,4v6A4,4,0,0,1,83,71Z"/>
                        <text id="_24h" data-name="24h" class="svg-element svg-text" x="60.5" y="65.25">24h</text>
                    </svg>
                    <h4 class="about-app__description-title">Investment Cost</h4>
                    <p>BIAYA LISTRIK</p>
                    <p>BIAYA AIR</p>
                </div>
            </div>
            <div class="col-6 about-app__img">
                <div class="about-app__img-wrap">
                    <img alt="" src="{{'storage/'.Voyager::setting('site.not_found')}}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Features-->

<div id="endMenu"></div>





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
<script src="{{asset('js/front-end/topbar.js')}}"></script>
<script src="{{asset('js/front-end/mobile-menu.js')}}"></script>

