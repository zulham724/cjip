@extends('front-end.master.newest-master')
@section('css')
    <style>
        .gm-style-iw {
            width: 350px !important;
            top: 15px !important;
            left: 0px !important;
            background-color: #fff;
            box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
            border: 1px solid rgba(72, 181, 233, 0.6);
            border-radius: 2px 2px 10px 10px;
        }
        #iw-container {
            margin-bottom: 10px;
        }
        #iw-container .iw-title {
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 22px;
            font-weight: 400;
            padding: 10px;
            background-color: #48b5e9;
            color: white;
            margin: 0;
            border-radius: 2px 2px 0 0;
        }
        #iw-container .iw-content {
            font-size: 13px;
            line-height: 18px;
            font-weight: 400;
            margin-right: 1px;
            padding: 15px 5px 20px 15px;
            max-height: 140px;
            overflow-y: auto;
            overflow-x: hidden;
        }
        .iw-content img {
            float: right;
            margin: 0 5px 5px 10px;
        }
        .iw-subTitle {
            font-size: 16px;
            font-weight: 700;
            padding: 5px 0;
        }
        .iw-bottom-gradient {
            position: absolute;
            width: 326px;
            height: 25px;
            bottom: 10px;
            right: 18px;
            background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
            background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
            background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
            background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
        }
    </style>
@endsection

@section('header')
    <header id="headerEn" class="header-home">
        <div class="container background background--right background--header background--mobile"
             style="background-image: url({{Voyager::image(setting('site.bg_rto'))}});">
            <div class="row">
                <div class="col-12">
                    <h2 class="header-home__title">{{Voyager::setting('site.title_rto')}}</h2>
                    <p class="header-home__description">{{Voyager::setting('site.ket_rto')}}</p>
                </div>
            </div>
        </div>
    </header>
    <header id="headerId" style="display: none;" class="header-home">
        <div class="container background background--right background--header background--mobile"
             style="background-image: url({{Voyager::image(setting('site.bg_rto'))}});">
            <div class="row">
                <div class="col-12">
                    <h2 class="header-home__title">{{Voyager::setting('site.id_title_rto')}}</h2>
                    <p class="header-home__description">{{Voyager::setting('site.id_ket_rto')}}</p>
                </div>
            </div>
        </div>
    </header>

@endsection
@section('content')
    <div id="contentEn">
        <div class="col-12 col-m-12">
            {{--SECTION PROJECT--}}

            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-12" style="text-align: justify">
                            <h4 class="about-app__description-title">Location</h4>
                            <div style="height: 100%; min-height: 500px;">
                                {!! Mapper::render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <section class="section">
                 <div class="container">
                     <div class="row">
                         <div class="col-12">
                             <h3 class="section__title">{{ $proyek->translate('en')->project_name }}</h3>
                         </div>
                         <div class="col-12">
                             <div class="col-12 about-app__img about-app__img--left">

                                 @isset($proyek->fotos)
                                     @php
                                         $images = json_decode($proyek->fotos)
                                     @endphp
                                     <div class="carousel">
                                         @foreach((array) $images as $image)
                                             <div class="item">
                                                 <div class="about-app__img-wrap">
                                                     <img src="{{Voyager::image($image)}}" alt="">
                                                 </div>
                                             </div>
                                         @endforeach
                                     </div>

                                 @else
                                     <img alt="" src="{{'storage/'.Voyager::setting('site.not_found')}}">
                                 @endisset
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-12">
                             <h3 class="section__title">Leadership</h3>
                         </div>
                     </div>
                     <hr>
                 </div>
             </section>--}}
            <hr>


        </div>
    </div>
    {{--{{$proyeks->links('pagination.page')}}--}}
@endsection

@section('js')
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script type="text/javascript">
        var locations = [
            {lat: -31.563910, lng: 147.154312},
            {lat: -33.718234, lng: 150.363181},
            {lat: -33.727111, lng: 150.371124},
            {lat: -33.848588, lng: 151.209834},
            {lat: -33.851702, lng: 151.216968},
            {lat: -34.671264, lng: 150.863657},
            {lat: -35.304724, lng: 148.662905},
            {lat: -36.817685, lng: 175.699196},
            {lat: -36.828611, lng: 175.790222},
            {lat: -37.750000, lng: 145.116667},
            {lat: -37.759859, lng: 145.128708},
            {lat: -37.765015, lng: 145.133858},
            {lat: -37.770104, lng: 145.143299},
            {lat: -37.773700, lng: 145.145187},
            {lat: -37.774785, lng: 145.137978},
            {lat: -37.819616, lng: 144.968119},
            {lat: -38.330766, lng: 144.695692},
            {lat: -39.927193, lng: 175.053218},
            {lat: -41.330162, lng: 174.865694},
            {lat: -42.734358, lng: 147.439506},
            {lat: -42.734358, lng: 147.501315},
            {lat: -42.735258, lng: 147.438000},
            {lat: -43.999792, lng: 170.463352}
        ]
        console.log(locations)
            var coordinate = {!! json_encode($array, JSON_HEX_TAG) !!};
            console.log(coordinate);
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: new google.maps.LatLng(6.9669735, 109.5630486,9),
            });
            console.log(map);

            // Create an array of alphabetical characters used to label the markers.
            var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            // Add some markers to the map.
            // Note: The code uses the JavaScript Array.prototype.map() method to
            // create an array of markers based on a given "locations" array.
            // The map() method here has nothing to do with the Google Maps API.
            var markers = locations.map(function(location, i) {
                return new google.maps.Marker({
                    position: location,
                    label: labels[i % labels.length]
                });
            });

            // Add a marker clusterer to manage the markers.
            var markerCluster = new MarkerClusterer(map, markers,
                {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});


    </script>


    {{--{!! ($chart->script()) !!}--}}
@endsection

