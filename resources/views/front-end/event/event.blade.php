<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Amigo - Multi-purpose Template">
    <meta name="keywords" content="Amigo - Multi-purpose Template">
    <meta name="author" content="Mandy">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!--
    ========================================================================
    EXCLUSIVE ON themeforest.net
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Template Name   : Amigo
    Author          : mital_04
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Copyright (c) 2018 - Amigo
    ========================================================================
    -->
    <title>Amigo - Multi-purpose Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Plugin CSS -->
    <link href="{{asset('cjibf/plugin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('cjibf/plugin/font-awesome/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('cjibf/plugin/flaticon/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('cjibf/plugin/et-line/style.css')}}" rel="stylesheet">
    <link href="{{asset('cjibf/plugin/themify-icons/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('cjibf/plugin/owl-carousel/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('cjibf/plugin/magnific/magnific-popup.css')}}" rel="stylesheet">
    <!-- End -->


    <!-- Theme css -->
    <link href="{{asset('cjibf/css/header.css')}}" rel="stylesheet">
    <link href="{{asset('cjibf/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('cjibf/css/color/default.css')}}" rel="stylesheet" id="color_theme">
    <link href="{{asset('cjibf/css/main.css')}}" rel="stylesheet">
    <!-- End -->

</head>

<!-- ========== Body Starts ========== -->
<body data-spy="scroll" data-target=".navbar" data-offset="73">

<div id="loading">
    <div class="load-circle"><span class="one"></span></div>
</div>

<!-- ========== Header Start ========== -->
<header class="header header-transparent">

    <!-- Container Start -->
    <div class="container">
        <nav class="navbar navbar-expand-lg menu-hover-text">
            <!-- navbar-brand -->
            <a class="navbar-brand" href="index.html">
                @php $site_logo = Voyager::setting('site.logo', ''); @endphp

                <img class="light-logo" src="{{asset('storage/'.$site_logo)}}" style="max-width: 50px;height: auto" title="" alt="">
                <img class="dark-logo" src="{{asset('storage/'.$site_logo)}}" style="max-width: 50px;height: auto" title="" alt="">
            </a>
            <!-- / -->

            <!-- Mobile Toggle -->
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#header-01" aria-controls="header-01" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- /-->
            <div id="header-01" class="collapse navbar-collapse top-menu">
                <!-- Menu Start -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#trainers">Trainers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#price">Price</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <!-- / -->
            </div>
        </nav><!-- / -->
    </div>
    <!-- / -->
</header>
<!-- ========== Header End ========== -->

<!-- ========== Main Start ========== -->
<main>

    <!-- Home -->
    <section id="home">
        <div class="owl-carousel" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-loop="true" data-space="0">
            <div class="slider bg-cover bg-no-repeat bg-center-center" style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
                <div class="container">
                    <div class="row align-items-center full-screen p-100px-tb">
                        <div class="col-xl-12 col-lg-12 col-md-12 m-50px-t">
                            <img src="http://cjip.jatengprov.go.id/storage/additional/cjip-2.png" style="display: block;margin-left: auto;margin-right: auto;max-width: 200px" alt="">
                            <h1 class="font-alt font-80 md-font-40 sm-font-30 font-w-700 color-white m-0px m-45px-b md-m-35px-b sm-m-20px-b" align="center">CJIBF<span class="color-theme">&</span>CJIBE 2019</h1>
                            <p class="color-white font-18 sm-font-15" align="center">The annual leading forum for investors and investment policy makers in Central Java.  This Forum involves Central Government, Governor of Central Java, and Regent/Mayor from 35 Regencies/ Municipalities throughout Central Java and attended by hundreds of domestic and foreign investors</p>
                            <div class="p-30px-t sm-p-5px-t" align="center">
                                <a href="#" class="m-btn m-10px-r">Join Us</a>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- Slider -->

            {{--<div class="slider bg-cover bg-no-repeat bg-center-center full-screen" style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
                <div class="container">
                    <div class="row align-items-center full-screen p-100px-tb">
                        <div class="col-xl-6 col-lg-7 col-md-8 m-50px-t">
                            <span class="font-18 sm-font-15 color-white m-20px-b md-m-15px-b display-inline-block">We help you achieve personal health goals</span>
                            <h1 class="font-alt font-80 md-font-40 sm-font-30 font-w-700 color-white m-0px m-45px-b md-m-35px-b sm-m-20px-b">Welcome to <span class="color-theme">Amigo</span> gym</h1>
                            <p class="color-white font-18 sm-font-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="p-30px-t sm-p-5px-t">
                                <a href="#" class="m-btn m-10px-r">Revelutionery gym</a>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div>--}} <!-- Slider -->

        </div>
    </section>
    <!-- Home End -->

    {{--<section id="about" class="bg-no-repeat bg-center-left" style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="white-opacity-bg p-100px-tb md-p-50px-tb sm-p-40px-tb">
                        <h3 class="font-alt color-extra-dark-gray m-0px m-10px-b font-w-700">Be stronger </h3>
                        <h6 class="font-alt font-w-600 font-16 color-theme m-0px m-20px-b">change your body with stargym</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="m-35epx-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            cillum dolore eu fugiat nulla pariatur.</p>
                        <a href="#" class="m-btn">BECOME A MEMBER</a>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!-- About Us -->
    <section  class="section light-gray-bg section-overlay">
        <div class="section-overlay-in section-overlay-l section-overlay-w-50 bg-cover bg-no-repeat bg-center-center"  style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-md-7">
                    <div class="box-shadow-large white-bg">
                        <div class="p-30px">
                            <h5 class="color-extra-dark-gray font-w-700 font-alt m-0px m-25px-b">About <span class="color-theme">Fitness</span></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p class="m-30px-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="m-btn">BECOME A MEMBER</a>
                        </div>
                    </div>
                </div> <!-- col -->
            </div> <!-- row -->

        </div> <!-- container -->
    </section>--}}
    <!-- About Us End-->

    <!-- Service Start -->
    {{--<section id="service" class="section" style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
        <div class="container">

            <div class="row justify-content-center m-60px-b sm-m-30px-b">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <h3 class="color-extra-dark-gray font-w-700 font-alt m-0px m-15px-b">Investment <span class="color-theme">Sectors</span></h3>
                    <span class="w-50px black-bg h-2px display-block m-auto-all m-15px-t m-25px-b"></span>
                </div> <!-- col -->
            </div> <!-- row -->


                <div class="row leadership" >
                    <div class="col-4 col-t-6">
                        <div class="leadership__item">
                            <img alt="" class="leadership__avatar" src="{{asset('images/frontend/img_leadership_1.png')}}">
                            <p class="leadership__name">Michael Logan</p>
                            <p class="leadership__work">Founder</p>
                        </div>
                    </div>
                    <div class="col-4 col-t-6">
                        <div class="leadership__item">
                            <img alt="" class="leadership__avatar" src="{{asset('images/frontend/img_leadership_2.png')}}">
                            <p class="leadership__name">John Brown</p>
                            <p class="leadership__work">CEO / Founder</p>
                        </div>
                    </div>
                    <div class="col-4 col-t-6">
                        <div class="leadership__item">
                            <img alt="" class="leadership__avatar" src="{{asset('images/frontend/img_leadership_3.png')}}">
                            <p class="leadership__name">Mike Smith</p>
                            <p class="leadership__work">CEO / Founder</p>
                        </div>
                    </div>
                    <div class="col-4 col-t-6">
                        <div class="leadership__item">
                            <img alt="" class="leadership__avatar" src="{{asset('images/frontend/img_leadership_4.png')}}">
                            <p class="leadership__name">George Right</p>
                            <p class="leadership__work">VP, Worldwide Sales</p>
                        </div>
                    </div>
                    <div class="col-4 col-t-6">
                        <div class="leadership__item">
                            <img alt="" class="leadership__avatar" src="{{asset('images/frontend/img_leadership_5.png')}}">
                            <p class="leadership__name">Li Chang</p>
                            <p class="leadership__work">Managing Director</p>
                        </div>
                    </div>
                    <div class="col-4 col-t-6">
                        <div class="leadership__item">
                            <img alt="" class="leadership__avatar" src="{{asset('images/frontend/img_leadership_6.png')}}">
                            <p class="leadership__name">Jill Valentine</p>
                            <p class="leadership__work">Art Director</p>
                        </div>
                    </div>
                </div>
            <!-- row -->
        </div> <!-- container -->
    </section>--}}
    <!-- services End -->

    <!-- Our Team -->
    <section id="trainers" class="section light-gray-bg" style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
        <div class="container">
            <div class="row justify-content-center m-60px-b sm-m-30px-b">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <h3 class="color-extra-dark-gray font-w-700 font-alt m-0px m-15px-b">Talkshow <span class="color-theme">Speakers</span></h3>
                    <span class="w-50px black-bg h-2px display-block m-auto-all m-15px-t m-25px-b"></span>

                </div> <!-- col -->
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 md-m-15px-tb">
                    <div class="our-team-04">
                        <div class="box-shadow hover-shadow p-10px white-bg text-center">
                            <div class="p-20px-t p-10px-b">
                                <div class="color-extra-dark-gray font-16 font-w-700 font-alt m-5px-b">Thomas Lembong</div>
                                <span class="font-14 font-w-700">Kepala BKPM RI</span>
                                <p class="color-medium-gray font-18 sm-font-15" align="center">“Perkembangan Iklim Investasi di Indonesia”</p>
                            </div>
                            <div class="team-img bg-cover bg-no-repeat bg-center-center" style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
                            </div>
                        </div>
                    </div> <!-- Our Team -->
                </div> <!-- Col -->

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 md-m-15px-tb">
                    <div class="our-team-04">
                        <div class="box-shadow hover-shadow p-10px white-bg text-center">
                            <div class="p-20px-t p-10px-b">
                                <div class="color-extra-dark-gray font-16 font-w-700 font-alt m-5px-b">Thomas Lembong</div>
                                <span class="font-14 font-w-700">Kepala BKPM RI</span>
                                <p class="color-medium-gray font-18 sm-font-15" align="center">“Perkembangan Iklim Investasi di Indonesia”</p>
                            </div>
                            <div class="team-img bg-cover bg-no-repeat bg-center-center" style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
                            </div>
                        </div>
                    </div> <!-- Our Team -->
                </div> <!-- Col -->

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 md-m-15px-tb">
                    <div class="our-team-04">
                        <div class="box-shadow hover-shadow p-10px white-bg text-center">
                            <div class="p-20px-t p-10px-b">
                                <div class="color-extra-dark-gray font-16 font-w-700 font-alt m-5px-b">Thomas Lembong</div>
                                <span class="font-14 font-w-700">Kepala BKPM RI</span>
                                <p class="color-medium-gray font-18 sm-font-15" align="center">“Perkembangan Iklim Investasi di Indonesia”</p>
                            </div>
                            <div class="team-img bg-cover bg-no-repeat bg-center-center" style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
                            </div>
                        </div>
                    </div> <!-- Our Team -->
                </div> <!-- Col -->

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 md-m-15px-tb">
                    <div class="our-team-04">
                        <div class="box-shadow hover-shadow p-10px white-bg text-center">
                            <div class="p-20px-t p-10px-b">
                                <div class="color-extra-dark-gray font-16 font-w-700 font-alt m-5px-b">Thomas Lembong</div>
                                <span class="font-14 font-w-700">Kepala BKPM RI</span>
                                <p class="color-medium-gray font-18 sm-font-15" align="center">“Perkembangan Iklim Investasi di Indonesia”</p>
                            </div>
                            <div class="team-img bg-cover bg-no-repeat bg-center-center" style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
                            </div>
                        </div>
                    </div> <!-- Our Team -->
                </div> <!-- Col -->

                    <div class="row leadership" style="padding-left: 34.5%" align="center">

                            <div class="leadership__item">
                                <img alt="" class="leadership__avatar3" src="{{asset('images/frontend/img_leadership_1.png')}}">
                                <p class="leadership__name3">Michael Logan</p>
                                <p class="leadership__work3">Founder</p>
                            </div>

                    </div>

            </div> <!-- row -->

        </div> <!-- container -->
    </section>
    <!-- / -->


    <!-- Our Blog -->
    <section id="blog" class="section light-gray-bg" style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
        <div class="container">

            <div class="row justify-content-center m-60px-b sm-m-30px-b">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <h3 class="color-extra-dark-gray font-w-700 font-alt m-0px m-15px-b"><span class="color-theme">Agenda</span></h3>
                    <span class="w-50px black-bg h-2px display-block m-auto-all m-15px-t m-25px-b"></span>
                    </div> <!-- col -->
            </div>

            <div class="row" align="center">
                <div class="col-12 col-md-12">
                    <img src="{{asset('cjibf/img/1600x1000.jpg')}}" style="max-height: 600px; width: auto" title="Amigo" alt="Amigo">
<!-- Blog Iteam -->
                </div> <!-- col -->


            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- / -->

    <!-- Contact -->
    <section id="contact" class="section" style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
        <div class="container">

            <div class="row justify-content-center m-60px-b sm-m-30px-b">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <h3 class="color-extra-dark-gray font-w-700 font-alt m-0px m-15px-b"><span class="color-theme">Venue</span></h3>
                    <span class="w-50px black-bg h-2px display-block m-auto-all m-15px-t m-25px-b"></span>
                </div> <!-- col -->
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="p-20px box-shadow-large white-bg">
                        <h5 class="color-extra-dark-gray font-20 font-w-500 m-0px m-35px-b sm-m-15px-b text-uppercase">Register CJIBF</h5>
                        <form id="contact-form" method="POST">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input name="Name" id="name" placeholder="Name" class="input-medium" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input name="email" id="email" placeholder="Email" class="input-medium" type="email">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <input name="password" id="subject" placeholder="Password" class="input-medium" type="password">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <input name="repassword" id="subject" placeholder="Repeat Password" class="input-medium" type="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="m-btn border-radius-30px box-shadow-large" onclick="send_mail()" type="button" value="Send">Register</button>
                                    <span id="suce_message" class="text-success" style="display: none">Message Sent Successfully</span>
                                    <span id="err_message" class="text-danger" style="display: none">Message Sending Failed</span>
                                    <a href="{{ url('/login/google') }}">
                                        or Register Using
                                        <img src="{{asset('images/google.png')}}" style="max-width: 10%" alt="google sign in">
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- col -->

                <div class="col-12 col-lg-6 md-m-30px-t">
                    <div class="container-fluid h-100 p-15px white-bg box-shadow-large">
                        <div class="embed-responsive embed-responsive-16by9 h-100">
                            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3151.840107317064!2d144.955925!3d-37.817214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1520156366883" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <h3 class="font-alt color-extra-dark-gray m-0px font-w-700 m-15px-b">Hotel Bidakara</h3>
                    <p class="font-18 sm-font-14 m-0px font-italic font-alt line-height-n">Jalan Gatot Subroto No.Kav. 71-73, RT.8/RW.8, Menteng Dalam, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12870
                    </p>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- / -->
    <section style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">
        <div class="container-fluid p-0px">
            <div class="row justify-content-center m-60px-b sm-m-30px-b">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <h3 class="color-extra-dark-gray font-w-700 font-alt m-0px m-15px-b"><span class="color-theme">Got a Question?</span></h3>
                    <span class="w-50px black-bg h-2px display-block m-auto-all m-15px-t m-25px-b"></span>
                    <p>or require further information, please use the contact info bellow</p>
                </div> <!-- col -->
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 bg-no-repeat bg-center-right bg-cover" style="background-image: url({{asset('cjibf/img/1600x1000.jpg')}});">

                </div>
                <div class="col-md-6">
                    <div class="p-20-t p-20-b p-20px-lr sm-p-20px sm-m-20px light-bitter-sweet-bg text-center">
                        <h3 class="color-extra-dark-gray font-w-700 font-alt m-0px m-15px-b">DPMTPSP Provinsi Jawa Tengah</h3>
                        <div class="col-12 m-5px-tb">
                            <i class="icon-map-pin color-black font-25"></i>
                            <h4 class="color-extra-dark-gray font-w-500 font-13 text-uppercase font-alt m-0px">Location</h4>
                            <p >301 The Greenhouse,<br> London, E2 8DY.</p>
                        </div>
                        <div class="col-12 m-5px-tb">
                            <i class="icon-map-pin color-black font-25"></i>
                            <h4 class="color-extra-dark-gray font-w-500 font-13 text-uppercase font-alt m-0px">Location</h4>
                            <p>301 The Greenhouse,<br> London, E2 8DY.</p>
                        </div>

                    </div>
                </div> <!-- col -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

</main>
<!-- ========== Main End ========== -->

<!-- ========== Footer Start ========== -->
<footer>
    <div class="dark-bg p-60px-t p-30px-tb">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="m-0px m-30px-t p-30px-t border-t border-w-1 border-extra-dark-gray color-medium-gray letter-spacing-1 font-12">Central Java Investment Platform</p>
                </div><!-- col -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- bg-dark -->
</footer>
<!-- ========== Footer End ========== -->

<!-- Jquery -->
<script src="{{asset('cjibf/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('cjibf/js/jquery-migrate-3.0.0.min.js')}}"></script>
<!-- End -->

<!-- Plugin JS -->
<script src="{{asset('cjibf/plugin/appear/jquery.appear.js')}}"></script><!--appear-->
<script src="{{asset('cjibf/plugin/bootstrap/js/popper.min.js')}}"></script><!--popper-->
<script src="{{asset('cjibf/plugin/bootstrap/js/bootstrap.js')}}"></script><!--bootstrap-->
<!-- End -->
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

<!-- Plugin Track -->
<script>var plugin_track = '{{asset('cjibf/plugin/')}}';</script>

{{--<script src="{{asset('cjibf/plugin/magnific/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('cjibf/plugin/owl-carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('cjibf/plugin/isotope/isotope.pkgd.min.js')}}"></script>--}}

<!-- Custom -->
<script src="{{asset('cjibf/js/custom.js')}}"></script>
<script src="{{asset('cjibf/js/mail_send.js')}}"></script>
<!-- End -->

</body>
<!-- ========== End of Body ========== -->
</html>
