@extends('front-end.master.newest-master')
@section('css')
    <link rel="stylesheet" href="{{asset('css/front-end/youtube.css')}}">
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

@section('header')
    <header class="header-home header-home--color">
        <div class="background"
             style="background-position-y: bottom;
                 background-repeat-y: no-repeat;
                 background-repeat: repeat-x;
                 background-size: contain;
                 background-image: url({{Voyager::image(setting('site.bg_rto'))}})">
            @php $site_logo = Voyager::setting('site.logo', ''); @endphp
            <div class="container background background--right background--features background--header"
                 style="background-image: url({{asset('storage/'.$site_logo)}})">
                <div class="row">
                    <div class="col-12">
                        <h2 class="header-home__title header-home__title--features">{{Voyager::setting('site.title_rto')}}<br/>{{Voyager::setting('site.ket_rto')}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('content')
    <div class="col-12 col-m-12">
        {{--SECTION PROJECT--}}
        @foreach($proyeks as $proyek)
        <section class="section">
            <div class="container">
                <h3 class="section__title">{{ $proyek->project_name }}</h3>
                <div class="row about-app about-app--reverse">
                        <div class="col-6 about-app__description">
                            <div class="about-app__description-content">
                                @isset($proyek->latar_belakang)
                                    <h6 class="about-app__description-title">Latar Belakang</h6>
                                    <p style="text-align: justify; text-justify: inter-word;">{{$proyek->latar_belakang}}</p>
                                @endisset

                                @isset($proyek->lingkup_pekerjaan)
                                    <h6 class="about-app__description-title">Lingkup Pekerjaan</h6>
                                    <p style="text-align: justify; text-justify: inter-word;">{{$proyek->lingkup_pekerjaan}}</p>
                                @endisset
                            </div>
                        </div>
                        <div class="col-6 about-app__img about-app__img--left">
                            <div class="about-app__img-wrap">
                                @isset($proyek->fotos)
                                    @php
                                        $images = json_decode($proyek->fotos)
                                    @endphp


                                    <img src="{{Voyager::image($images[0])}}" alt="">

                                @else
                                    <img alt="" src="{{'storage/'.Voyager::setting('site.not_found')}}">
                                @endisset
                            </div>
                        </div>
                    </div>


            </div>
        </section>
        {{--END-SECTION PROJECT--}}

        {{--SECTION PROJECT DETAAIL--}}
        <section class="section">
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
                                                <td class="site-table__td"><p>{{$proyek->irr}}</p></td>
                                            </tr>
                                        @endisset
                                        @isset($proyek->eksisting)
                                            <tr class="site-table__row">
                                                <th class="site-table__th">IRR</th>
                                                <td class="site-table__td"><p>{{$proyek->eksisting}}</p></td>
                                            </tr>
                                        @endisset
                                        @isset($proyek->bc_ratio)
                                            <tr class="site-table__row">
                                                <th class="site-table__th">BC Ration</th>
                                                <td class="site-table__td"><p>{{$proyek->eksisting}}</p></td>
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
        </section>
        {{--END-SECTION PROJECT DETAIL--}}

        {{--SECTION PROJECT CONTACT PERSON--}}
            <section class="section section--half section--bottom-space">
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
            </section>
            <hr>
        {{--END-SECTION PROJECT CONTACT PERSON--}}
        @endforeach

    </div>
    {{--{{$proyeks->links('pagination.page')}}--}}
@endsection


@section('js')
    {{--@if($videos->isNotEmpty())
        <script>
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            var player;
            var idnya = document.getElementById('idnya');

            //console.log({{$id}});

            function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                    height: '315',
                    width: '560',
                    videoId: '{{$id}}',
                    events: {
                        'onReady': function() {
                            $(".video-thumb").click(function() {
                                var $this = $(this);
                                if (!$this.hasClass("active")) {
                                    player.loadVideoById($this.attr("data-video"));
                                    $this.addClass("active").siblings().removeClass("active");
                                }
                            });
                        }
                    }
                });
            }
        </script>
    @endif--}}
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    {{--<script>
        // Data gathered from http://populationpyramid.net/germany/2015/

        // Age categories
        var categories = [];
        var pria = [];
        var wanita = [];

        var test = {!! $tes !!};

        var i;
        for(i=0; i<test.length; i++){
            categories.push(test[i].kecamatan_id);
            pria.push(-Math.abs(test[i].lelaki));
            wanita.push(test[i].perempuan);
        }
        var sumber = test[0].sumber_data;

        Highcharts.chart('penduduk', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Kepadatan Penduduk '+test[0].kab_kota_id
            },
            subtitle: {
                text: 'Source: '+sumber
            },
            xAxis: [{
                categories: categories,
                reversed: false,
                labels: {
                    step: 1
                }
            }, { // mirror axis on right side
                opposite: true,
                reversed: false,
                categories: categories,
                linkedTo: 0,
                labels: {
                    step: 1
                }
            }],
            yAxis: {
                title: {
                    text: null
                },
                labels: {
                    formatter: function () {
                        return Math.abs(this.value);
                    }
                }
            },

            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + ', kecamatan ' + this.point.category + '</b><br/>' +
                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Male',
                data: pria,
            }, {
                name: 'Female',
                data: wanita
            }]
        });

    </script>
    <script>
        /*JS FOR SCROLLING THE ROW OF THUMBNAILS*/
        $(document).ready(function () {
            $('.vid-item').each(function(index){
                $(this).on('click', function(){
                    var current_index = index+1;
                    $('.vid-item .thumb').removeClass('active');
                    $('.vid-item:nth-child('+current_index+') .thumb').addClass('active');
                });
            });
        });
    </script>
    <script>
        function moreLess(initiallyVisibleCharacters) {
            var visibleCharacters = initiallyVisibleCharacters;
            var paragraph = $(".text");




            paragraph.each(function() {
                var text = $(this).text();
                var wholeText = text.slice(0, visibleCharacters) + "<span class='ellipsis'>... </span><a href='#' class='more'>MORE<i class='fa fa-arrow-circle-o-down' aria-hidden='true'></i></a>" + "<span style='display:none'>" + text.slice(visibleCharacters, text.length) + "<a href='#' class='less'> LESS<i class='fa fa-arrow-circle-o-up' aria-hidden='true'></i></a></span>"

                if (text.length < visibleCharacters) {
                    return
                } else {
                    $(this).html(wholeText)
                }
            });
            $(".more").click(function(e) {
                e.preventDefault();
                $(this).hide().prev().hide();
                $(this).next().show();
            });
            $(".less").click(function(e) {
                e.preventDefault();
                $(this).parent().hide().prev().show().prev().show();
            });
        };

        moreLess(300);
    </script>
    <script>
        var tahun = [];
        var umr = [];
        var umrs = {!! $umrs !!};
        console.log(umrs);
        var i;

        for(i=0; i<umrs.length; i++){
            tahun.push(umrs[i].tahun);
            umr.push(Math.abs(umrs[i].nilai_umr));
        }
        console.log(umr)
        var sumber = umrs[0].sumber_data;
        //console.log(umr);
        Highcharts.chart('umr', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'UMR'
            },
            subtitle: {
                text: 'Source: '+sumber
            },
            xAxis: {
                categories: tahun,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Juta (Rp)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: Rp </td>' +
                    '<td style="padding:0"><b>{point.y} </b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'UMR',
                data: umr

            }]
        });
    </script>
    <script>
        $(document).ready(function() {
            // Configure/customize these variables.
            var showChar = 100;  // How many characters are shown by default
            var ellipsestext = "...";
            var moretext = "Show more >";
            var lesstext = "Show less";


            $('.more').each(function() {
                var content = $(this).html();


                if(content.length > showChar) {
                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);
                    console.log(h);

                    var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                    $(this).html(html);
                }

            });

            $(".morelink").click(function(){
                if($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });
    </script>--}}
    <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
    {{--{!! ($chart->script()) !!}--}}
@endsection

