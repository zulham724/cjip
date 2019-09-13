@extends('front-end.master.newest-master')
@section('css')
    <link rel="stylesheet" href="{{asset('css/front-end/youtube.css')}}">
    <link rel="stylesheet" href="{{asset('css/front-end/green.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <style>
        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
            border-radius: 5px;
        }
    </style>
@endsection

@section('content')
    <div id="contentEn">
        <div class="col-12 col-m-12" style="padding-top: 200px">
            {{--SECTION PROJECT--}}
                <section class="section">
                    <div class="container">
                        <h3 class="section__title">{{ $proyek->translate('en')->project_name }}</h3>
                        <div class="row about-app">
                            {{--<div class="col-6 about-app__description">
                                <div class="about-app__description-content">
                                    @isset($proyek->latar_belakang)
                                        <h6 class="about-app__description-title">Background</h6>
                                        <p style="text-align: justify; text-justify: inter-word;">{{ str_limit($proyek->translate('en')->latar_belakang, $limit = 500, $end = '...') }}</p>
                                    @endisset
                                    <a href="{{route('detail.rto', ['id'=>$proyek->id,'slug' => str_slug($proyek->project_name, '-')])}}" class="site-btn site-btn--accent header-home__btn">Project's Details</a>
                                    <a href="05_features.html" class="site-btn site-btn--light header-home__btn">Project's Owner</a>
                                    --}}{{-- @isset($proyek->lingkup_pekerjaan)
                                         <h6 class="about-app__description-title">Scope of Work</h6>
                                         <p style="text-align: justify; text-justify: inter-word;">{{$proyek->translate('en')->lingkup_pekerjaan}}</p>
                                     @endisset--}}{{--
                                </div>
                            </div>--}}
                                @isset($proyek->fotos)
                                    @php
                                        $images = json_decode($proyek->fotos)
                                    @endphp
                                    <div class="carousel">
                                        @foreach((array) $images as $image)
                                            <div class="carousel__slide">
                                                <img src="{{Voyager::image($image)}}" alt="">
                                                <p class="carousel__caption">{{$proyek->project_name}}</p>
                                            </div>
                                        @endforeach
                                    </div>

                                @else
                                    <img alt="" src="{{'storage/'.Voyager::setting('site.not_found')}}">
                                @endisset
                        </div>


                    </div>
                </section>
                {{--END-SECTION PROJECT--}}

                {{--SECTION PROJECT DETAAIL--}}
                {{-- <section class="section">
                     <div class="container">
                         <div class="row">
                             <div class="col-12">
                                 <div class="site-table">
                                     <table class="tablesaw tablesaw-swipe" data-tablesaw-mode="swipe">
                                         <tbody class="site-table__body">
                                         @isset($proyek->eksisting)
                                             <tr class="site-table__row">
                                                 <th class="site-table__th">Existing</th>
                                                 <td class="site-table__td"><p>{{$proyek->translate('en')->eksisting}}</p></td>
                                             </tr>
                                         @endisset
                                         @isset($proyek->luas_lahan)
                                             <tr class="site-table__row">
                                                 <th class="site-table__th">Land Loss</th>
                                                 <td class="site-table__td"><p>{{$proyek->translate('en')->luas_lahan}}</p></td>
                                             </tr>
                                         @endisset
                                         @isset($proyek->status_kepemilikan)
                                             <tr class="site-table__row">
                                                 <th class="site-table__th">Ownership Status</th>
                                                 <td class="site-table__td"><p>{{$proyek->translate('en')->status_kepemilikan}}</p></td>
                                             </tr>
                                         @endisset
                                         @isset($proyek->nilai_investasi)
                                             <tr class="site-table__row">
                                                 <th class="site-table__th">Investment Value</th>
                                                 <td class="site-table__td"><p>{{$proyek->translate('en')->nilai_investasi}}</p></td>
                                             </tr>
                                         @endisset
                                         @isset($proyek->skema_investasi)
                                             <tr class="site-table__row">
                                                 <th class="site-table__th">Investment Scheme</th>
                                                 <td class="site-table__td"><p>{{$proyek->translate('en')->skema_investasi}}</p></td>
                                             </tr>
                                         @endisset
                                         @isset($proyek->irr)
                                             <tr class="site-table__row">
                                                 <th class="site-table__th">NPV</th>
                                                 <td class="site-table__td"><p>{{$proyek->translate('en')->npv}}</p></td>
                                             </tr>
                                         @endisset
                                         @isset($proyek->eksisting)
                                             <tr class="site-table__row">
                                                 <th class="site-table__th">IRR</th>
                                                 <td class="site-table__td"><p>{{$proyek->translate('en')->irr}}</p></td>
                                             </tr>
                                         @endisset
                                         @isset($proyek->bc_ratio)
                                             <tr class="site-table__row">
                                                 <th class="site-table__th">BC Ration</th>
                                                 <td class="site-table__td"><p>{{$proyek->translate('en')->bc_ratio}}</p></td>
                                             </tr>
                                         @endisset
                                         @isset($proyek->playback_period)
                                             <tr class="site-table__row">
                                                 <th class="site-table__th">Payback Period</th>
                                                 <td class="site-table__td"><p>{{$proyek->translate('en')->playback_period}}</p></td>
                                             </tr>
                                         @endisset
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>--}}
                {{--END-SECTION PROJECT DETAIL--}}

                {{--SECTION PROJECT CONTACT PERSON--}}
                {{-- <section class="section section--half section--bottom-space">
                     <div class="container">
                         <div class="row">
                             <div class="col-12">
                                 <h3 class="section__title">Contact Person</h3>
                             </div>
                         </div>
                         <div class="row integrate integrate--calculator">
                             <div class="col-12">
                                 <div class="integrate__card card">

                                     <div class="row">
                                         <div class="col-12">
                                             <div class="site-table">
                                                 <table class="tablesaw tablesaw-swipe" data-tablesaw-mode="swipe">
                                                     <tbody class="site-table__body">
                                                     @isset($proyek->cp_nama)
                                                         <tr class="site-table__row">
                                                             <th class="site-table__th">Name</th>
                                                             <td class="site-table__td"><p>{{$proyek->cp_nama}}</p></td>
                                                         </tr>
                                                     @endisset
                                                     @isset($proyek->cp_hp)
                                                         <tr class="site-table__row">
                                                             <th class="site-table__th">Phone</th>
                                                             <td class="site-table__td"><p>{{$proyek->cp_hp}}</p></td>
                                                         </tr>
                                                     @endisset
                                                     @isset($proyek->cp_email)
                                                         <tr class="site-table__row">
                                                             <th class="site-table__th">Email</th>
                                                             <td class="site-table__td"><p>{{$proyek->cp_email}}</p></td>
                                                         </tr>
                                                     @endisset
                                                     @isset($proyek->cp_alamat)
                                                         <tr class="site-table__row">
                                                             <th class="site-table__th">Address</th>
                                                             <td class="site-table__td"><p>{{$proyek->cp_alamat}}</p></td>
                                                         </tr>
                                                     @endisset
                                                     </tbody>
                                                 </table>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>--}}
                <hr>
                {{--END-SECTION PROJECT CONTACT PERSON--}}


        </div>
    </div>
    <div id="contentId" style="display: none">
        <div class="col-12 col-m-12">
            {{--SECTION PROJECT--}}

                <section class="section">
                    <div class="container">
                        <h3 class="section__title">{{ $proyek->project_name }}</h3>
                        <div class="row about-app about-app--reverse" style="padding-top: 50px!important;">
                            <div class="col-6 about-app__description">
                                <div class="about-app__description-content">
                                    @isset($proyek->latar_belakang)
                                        <h6 class="about-app__description-title">Latar Belakang</h6>
                                        <p style="text-align: justify; text-justify: inter-word;">{{ str_limit($proyek->latar_belakang, $limit = 500, $end = '...') }}</p>
                                    @endisset
                                    <a href="10_get-app.html" class="site-btn site-btn--accent header-home__btn">Detail Proyek</a>
                                    <a href="05_features.html" class="site-btn site-btn--light header-home__btn">Pemilik Proyek</a>
                                    {{-- @isset($proyek->lingkup_pekerjaan)
                                         <h6 class="about-app__description-title">Lingkup Pekerjaan</h6>
                                         <p style="text-align: justify; text-justify: inter-word;">{{$proyek->lingkup_pekerjaan}}</p>
                                     @endisset--}}
                                </div>
                            </div>

                            <div class="col-6 about-app__img about-app__img--left">

                                @isset($proyek->fotos)
                                    @php
                                        $images = json_decode($proyek->fotos)
                                    @endphp
                                    {{--<div class="carousel">
                                        @foreach((array) $images as $image)
                                            <div class="item">
                                                <div class="about-app__img-wrap">
                                                    <img src="{{Voyager::image($image)}}" alt="">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
--}}                                <div class="carousel">
                                        <div class="slider carousel__slider--images">
                                            <div class="carousel__slide">
                                                <img src="../assets/img/blog/24_blog_img_01.jpg" alt="">
                                                <p class="carousel__caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                            <div class="carousel__slide">
                                                <img src="../assets/img/blog/24_blog_img_02.jpg" alt="">
                                                <p class="carousel__caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                            <div class="carousel__slide">
                                                <img src="../assets/img/blog/24_blog_img_03.jpg" alt="">
                                                <p class="carousel__caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                            <div class="carousel__slide">
                                                <img src="../assets/img/blog/24_blog_img_04.jpg" alt="">
                                                <p class="carousel__caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <img alt="" src="{{'storage/'.Voyager::setting('site.not_found')}}">
                                @endisset
                            </div>
                        </div>


                    </div>
                </section>
                {{--END-SECTION PROJECT--}}

                {{--SECTION PROJECT DETAAIL--}}
                {{--<section class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="site-table">
                                    <table class="tablesaw tablesaw-swipe" data-tablesaw-mode="swipe">
                                        <tbody class="site-table__body">
                                        @isset($proyek->eksisting)
                                            <tr class="site-table__row">
                                                <th class="site-table__th">Eksisting</th>
                                                <td class="site-table__td"><p>{{$proyek->eksisting}}</p></td>
                                            </tr>
                                        @endisset
                                        @isset($proyek->luas_lahan)
                                            <tr class="site-table__row">
                                                <th class="site-table__th">Luas Lahan</th>
                                                <td class="site-table__td"><p>{{$proyek->luas_lahan}}</p></td>
                                            </tr>
                                        @endisset
                                        @isset($proyek->status_kepemilikan)
                                            <tr class="site-table__row">
                                                <th class="site-table__th">Status Kepemilikan</th>
                                                <td class="site-table__td"><p>{{$proyek->status_kepemilikan}}</p></td>
                                            </tr>
                                        @endisset
                                        @isset($proyek->nilai_investasi)
                                            <tr class="site-table__row">
                                                <th class="site-table__th">Nilai Investasi</th>
                                                <td class="site-table__td"><p>{{$proyek->nilai_investasi}}</p></td>
                                            </tr>
                                        @endisset
                                        @isset($proyek->skema_investasi)
                                            <tr class="site-table__row">
                                                <th class="site-table__th">Skema Investasi</th>
                                                <td class="site-table__td"><p>{{$proyek->skema_investasi}}</p></td>
                                            </tr>
                                        @endisset
                                        @isset($proyek->irr)
                                            <tr class="site-table__row">
                                                <th class="site-table__th">NPV</th>
                                                <td class="site-table__td"><p>{{$proyek->npv}}</p></td>
                                            </tr>
                                        @endisset
                                        @isset($proyek->eksisting)
                                            <tr class="site-table__row">
                                                <th class="site-table__th">IRR</th>
                                                <td class="site-table__td"><p>{{$proyek->irr}}</p></td>
                                            </tr>
                                        @endisset
                                        @isset($proyek->bc_ratio)
                                            <tr class="site-table__row">
                                                <th class="site-table__th">BC Ration</th>
                                                <td class="site-table__td"><p>{{$proyek->bc_ratio}}</p></td>
                                            </tr>
                                        @endisset
                                        @isset($proyek->playback_period)
                                            <tr class="site-table__row">
                                                <th class="site-table__th">Payback Period</th>
                                                <td class="site-table__td"><p>{{$proyek->playback_period}}</p></td>
                                            </tr>
                                        @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>--}}
                {{--END-SECTION PROJECT DETAIL--}}

                {{--SECTION PROJECT CONTACT PERSON--}}
                {{--<section class="section section--half section--bottom-space">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="section__title">Contact Person</h3>
                            </div>
                        </div>
                        <div class="row integrate integrate--calculator">
                            <div class="col-12">
                                <div class="integrate__card card">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="site-table">
                                                <table class="tablesaw tablesaw-swipe" data-tablesaw-mode="swipe">
                                                    <tbody class="site-table__body">
                                                    @isset($proyek->cp_nama)
                                                        <tr class="site-table__row">
                                                            <th class="site-table__th">Name</th>
                                                            <td class="site-table__td"><p>{{$proyek->cp_nama}}</p></td>
                                                        </tr>
                                                    @endisset
                                                    @isset($proyek->cp_hp)
                                                        <tr class="site-table__row">
                                                            <th class="site-table__th">Phone</th>
                                                            <td class="site-table__td"><p>{{$proyek->cp_hp}}</p></td>
                                                        </tr>
                                                    @endisset
                                                    @isset($proyek->cp_email)
                                                        <tr class="site-table__row">
                                                            <th class="site-table__th">Email</th>
                                                            <td class="site-table__td"><p>{{$proyek->cp_email}}</p></td>
                                                        </tr>
                                                    @endisset
                                                    @isset($proyek->cp_alamat)
                                                        <tr class="site-table__row">
                                                            <th class="site-table__th">Address</th>
                                                            <td class="site-table__td"><p>{{$proyek->cp_alamat}}</p></td>
                                                        </tr>
                                                    @endisset
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>--}}
                <hr>
                {{--END-SECTION PROJECT CONTACT PERSON--}}


        </div>
    </div>

    {{--{{$proyeks->links('pagination.page')}}--}}
@endsection

@section('js')

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
    <script src="{{asset('js/front-end/vendor/slick.min.js')}}"></script>
    <script src="{{asset('js/front-end/carousel.js')}}"></script>
    {{--<script>
        $('.carousel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: false,
            variableWidth: false,
            autoplay: true,
            arrows: false
        });
    </script>--}}
    {{--{!! ($chart->script()) !!}--}}
@endsection

