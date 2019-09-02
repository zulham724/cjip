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

    <style>
        .col-half-offset{
            margin-left:4.166666667%
        }
    </style>
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
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#home">About Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sector">Sectors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#talkshow">Talkshow</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#agenda">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#venue">Venue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cp">Contact</a>
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
        @isset($setting)
            @php
            $images = json_decode($setting->carousels, true);
            //dd($images);
            @endphp
        <div class="owl-carousel" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-loop="true" data-space="0">
            @foreach((array)$images as $image)
            <div class="slider bg-cover bg-no-repeat bg-center-center" style="background-image: url('{{Voyager::image($image)}}');">
                <div class="container">
                    <div class="row align-items-center full-screen p-100px-tb">
                        <div class="col-xl-12 col-lg-12 col-md-12 m-50px-t">

                            <img src="{{Voyager::image($setting->logo)}}" style="display: block;margin-left: auto;margin-right: auto;max-width: 200px; -webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);" alt="" >

                            <div class="p-30px-t sm-p-5px-t" align="center">
                                <a href="#venue" class="m-btn m-10px-r">Join Us</a>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div>
            <!-- Slider -->
            @endforeach
        </div>
            <h1 class="font-alt font-80 md-font-40 sm-font-30 font-w-700 color-white m-0px m-45px-b md-m-35px-b sm-m-20px-b" align="center"><span class="color-theme">{{$setting->initial_name}}</span></h1>
            <h1 class="font-alt font-30 md-font-15 sm-font-10 font-w-700 color-white m-0px m-45px-b md-m-35px-b sm-m-20px-b" align="center"><span class="color-dark-gray">{{$setting->nama_kegiatan}}</span></h1>
            <p class="color-dark-gray font-18 sm-font-15" align="center">{{$setting->keterangan}}</p>
        @endisset
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
    <section id="sector" class="section" style="background-image: url({{asset('cjibf/img/300ppi/bg.png')}});">
        <div class="container-fluid p-0px">
            <div class="row justify-content-center m-60px-b sm-m-30px-b">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <p>Showcasing Opportunities in</p>
                    <span class="w-50px black-bg h-2px display-block m-auto-all m-15px-t m-25px-b"></span>
                    <h3 class="color-extra-dark-gray font-w-700 font-alt m-0px m-15px-b"><span class="color-theme">Manufacturing and Tourism Sectors</span></h3>
                </div> <!-- col -->
            </div>
            <div class="row no-gutters">
                @isset($sectors)
                @foreach($sectors as $sector)
                        <div class="col-md-6 bg-no-repeat bg-center-right bg-cover">
                            <div class="portfolio-content lightbox-gallery">
                                <ul class="portfolio-cols portfolio-cols-12">
                                    <li class="portfolio-item illustration">
                                        <div class="portfolio-col portfolio-hover-02">
                                            <img src="{{Voyager::image($sector->image)}}" title="" alt="">
                                            <div class="overlay theme-bg border-all border-w-10 border-double border-white"></div>

                                            <div class="hover text-center p-10px">
                                                <p class="font-alt color-white m-0px font-w-300 letter-spacing-2 font-alt font-18 text-uppercase">{{$sector->sector}}</p>
                                                <div class="btn-bar">
                                                    <a href="{{Voyager::image($sector->image)}}" class="lg-link"><i class="fas fa-expand"></i></a>
                                                </div>
                                            </div> <!-- hover -->
                                        </div> <!-- .portfolio-co -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                @endforeach

                @endisset
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- services End -->

    <!-- Our Team -->
    <section id="talkshow" class="section light-gray-bg" style="background-image: url({{asset('cjibf/img/300ppi/bg.png')}});">
        <div class="container">
            <div class="row justify-content-center m-60px-b sm-m-30px-b">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <h3 class="color-extra-dark-gray font-w-700 font-alt m-0px m-15px-b">Talkshow <span class="color-theme">Speakers</span></h3>
                    <span class="w-50px black-bg h-2px display-block m-auto-all m-15px-t m-25px-b"></span>

                </div> <!-- col -->
            </div>
            @isset($talkshows)
                    <div class="row">
                        @foreach($talkshows as $talkshow)
                        <div class="col">
                            <div class="our-team-04">
                                <div class="box-shadow hover-shadow p-10px white-bg text-center">
                                    <div class="p-20px-t p-10px-b">
                                        <div class="color-extra-dark-gray font-16 font-w-700 font-alt m-5px-b">{{$talkshow->nama}}</div>
                                        <span class="font-14 font-w-700">{{$talkshow->jabatan}}</span>
                                        <p class="color-medium-gray font-18 sm-font-15" align="center">{{$talkshow->tama}}</p>
                                    </div>
                                    <div class="team-img bg-cover bg-no-repeat bg-center-center" style="background-image: url('{{Voyager::image($talkshow->foto)}}');">
                                    </div>
                                </div>
                            </div> <!-- Our Team -->
                        </div> <!-- Col -->

                        @endforeach
                    </div> <!-- row -->
            @endisset



        </div> <!-- container -->
    </section>
    <!-- / -->


    <!-- Our Blog -->
    <section id="agenda" class="section light-gray-bg" style="background-image: url({{asset('cjibf/img/300ppi/bg.png')}});">
        <div class="container">

            <div class="row justify-content-center m-60px-b sm-m-30px-b">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <h3 class="color-extra-dark-gray font-w-700 font-alt m-0px m-15px-b"><span class="color-theme">Agenda</span></h3>
                    <span class="w-50px black-bg h-2px display-block m-auto-all m-15px-t m-25px-b"></span>
                    </div> <!-- col -->
            </div>

            <div class="row" align="center">
                <div class="col-12 col-md-12">
                    <img src="{{Voyager::image($setting->agenda)}}" style="max-height: 600px; width: auto" title="Amigo" alt="Amigo">
<!-- Blog Iteam -->
                </div> <!-- col -->


            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- / -->

    <!-- Contact -->
    <section id="venue" class="section" style="background-image: url({{asset('cjibf/img/300ppi/bg.png')}});">
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
                        <form id="contact-form" method="POST" action="{{ route('investor.register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input name="name" id="name" placeholder="Name" class="input-medium" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input name="email" id="email" placeholder="Email" class="input-medium" type="email">
                                        <span class="form-validation" id="error_email"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <input name="password" id="password" placeholder="Password" class="input-medium" type="password">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <input name="password_confirmation" id="repassword" placeholder="Repeat Password" class="input-medium" type="password">
                                    </div>
                                </div>
                                <button class="m-btn border-radius-30px box-shadow-large" type="submit" >Register</button>
                                <span id="suce_message" class="text-success" style="display: none">Message Sent Successfully</span>
                                <span id="err_message" class="text-danger" style="display: none">Message Sending Failed</span>
                            </div>
                        </form>
                        <div class="col-12">

                            <a href="{{ url('/login/google') }}">
                                or Register Using
                                <img src="{{asset('images/google.png')}}" style="max-width: 10%" alt="google sign in">
                            </a>
                        </div>
                    </div>
                </div> <!-- col -->

                <div class="col-12 col-lg-6 md-m-30px-t">
                    <div class="container-fluid h-100 p-15px white-bg box-shadow-large">
                        <div class="embed-responsive embed-responsive-16by9 h-100">
                            <iframe class="embed-responsive-item" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=hotel%20bidakara+(Title)&amp;ie=UTF8&amp;t=p&amp;z=10&amp;iwloc=B&amp;output=embed" allowfullscreen=""></iframe>
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
    <section id="cp" style="background-image: url({{asset('cjibf/img/300ppi/bg.png')}});">
        <div class="container-fluid p-0px">
            <div class="row justify-content-center m-60px-b sm-m-30px-b">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <h3 class="color-extra-dark-gray font-w-700 font-alt m-0px m-15px-b"><span class="color-theme">Got a Question?</span></h3>
                    <span class="w-50px black-bg h-2px display-block m-auto-all m-15px-t m-25px-b"></span>
                    <p>or require further information, please use the contact info bellow</p>
                </div> <!-- col -->
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 bg-no-repeat bg-center-right bg-cover" style="background-image: url({{asset('cjibf/img/300ppi/cp.png')}});">

                </div>
                <div class="col-md-6">
                    <div class="p-20-t p-20-b p-20px-lr sm-p-20px sm-m-20px light-bitter-sweet-bg text-center">

                        <h3 class="color-extra-dark-gray font-w-700 font-alt m-0px m-15px-b">DPMTPSP Provinsi Jawa Tengah</h3>
                        <div class="row">
                            <div class="col-2">
                                <i class="icon-map-pin color-black font-25"></i>
                            </div>
                            <div class="col-10">
                                <p>Jl. Mgr. Sugiyopranoto No. 1 Semarang, Kode Pos 50131</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <i class="far fa-envelope color-black font-25"></i>
                            </div>
                            <div class="col-10">
                                <p>cjibf.jateng@gmail.com</p>
                            </div>
                        </div>

                        @isset($cps)
                        <div class="row">
                            <div class="col-2">
                                <i class="icon-phone color-black font-25"></i>
                            </div>
                            <div class="col-10">

                                    @foreach($cps as $cp)
                                        <p>{{$cp->name}}<span>&emsp;</span>{{$cp->phone}}</p>
                                    @endforeach

                            </div>
                        </div>
                        @endisset

                        <div class="row">
                            <div class="col-2">
                                <i class="icon-globe color-black font-25"></i>
                            </div>
                            <div class="col-10">
                                <a href="https://cjip.jatengprov.go.id">
                                    <p>Central Java Investment Business Platform</p>
                                </a>
                            </div>
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
<script>
    $(document).ready(function(){

        $('#email').blur(function(){
            var error_email = '';
            var email = $('#email').val();
            var _token = $('input[name="_token"]').val();
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            //console.log(email)
            if(!filter.test(email))
            {
                $('#error_email').html('<label class="text-danger">Invalid Email</label>');
                $('#email').addClass('has-error');
                $('#register').attr('disabled', 'disabled');
            }
            else
            {
                $.ajax({
                    url:"{{ route('checkemail') }}",
                    method:"POST",
                    data:{email:email, _token:_token},
                    success:function(result)
                    {
                        if(result == 'unique')
                        {
                            $('#error_email').html('<label class="text-success">Email Available</label>');
                            $('#email').removeClass('has-error');
                            $('#register').attr('disabled', false);
                        }
                        else
                        {
                            $('#error_email').html('<label class="text-danger">This Email Already Exist</label>');
                            $('#email').addClass('has-error');
                            $('#register').attr('disabled', 'disabled');
                        }
                    }
                })
            }
        });

    });
</script>
</body>
<!-- ========== End of Body ========== -->
</html>
