@extends('front-end.master.front-end')
@section('sass')
    <link rel="stylesheet" href="{{asset('css/front-end/youtube.css')}}">
@endsection
@section('search')
    <div class="container">
        <div class="row search">
            <div class="col-12 col-m-12">
                <div class="card form">
                    <p class="card__title">Search</p>
                    <form class="form_form" action="{{route('search')}}">
                        <div class="form__form-group form__form-group--without-label">
                            <input class="form__input js-field__search" type="text" name="search" id="search"
                                   placeholder="I am looking for...">
                            <button type="submit" class="form__input-icon"
                                    style="background-color: transparent; background-repeat: no-repeat; border: none; overflow: hidden; outline: none;z-index: 100">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                                <img alt="" src="@isset($proyek->foto) {{Voyager::image($proyek->foto)}} @else {{'storage/'.Voyager::setting('site.not_found')}}@endisset">
                            </div>
                        </div>
                    </div>


                    <hr>
            </div>
        </section>
        {{--END-SECTION PROJECT--}}

        {{--SECTION PROJECT DETAAIL--}}
        <section class="section">
            <div class="container">
                    <div class="row about-app about-app--reverse">
                        <div class="col-6 about-app__description">
                            <div class="about-app__description-content">
                                <h4 class="about-app__description-title"></h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-6 about-app__img about-app__img--left">
                            <div class="about-app__img-wrap">
                                <img alt="" src="">
                            </div>
                        </div>
                    </div>


                    <hr>
            </div>
        </section>
        {{--END-SECTION PROJECT DETAIL--}}

        {{--SECTION PROJECT CONTACT PERSON--}}
        <section class="section">
            <div class="container">
                    <div class="row about-app about-app--reverse">
                        <div class="col-6 about-app__description">
                            <div class="about-app__description-content">
                                <h4 class="about-app__description-title"></h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-6 about-app__img about-app__img--left">
                            <div class="about-app__img-wrap">
                                <img alt="" src="">
                            </div>
                        </div>
                    </div>


                    <hr>
            </div>
        </section>
        {{--END-SECTION PROJECT CONTACT PERSON--}}
        @endforeach
    </div>
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

