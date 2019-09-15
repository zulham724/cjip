@extends('front-end.master.newest-master')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.uikit.min.css">
@endsection
@section('header')

    <div id="headerEn">
        <header class="header-home header-home--color">
            <div class="background"
                 style="background-position-y: bottom;
                     background-repeat-y: no-repeat;
                     background-repeat: repeat-x;
                     background-size: contain;
                     background-image: url({{Voyager::image(setting('site.bg_why'))}})">
                @php $site_logo = Voyager::setting('site.logo', ''); @endphp
                <div class="container background background--right background--features background--header"
                     style="background-image: url({{asset('storage/'.$site_logo)}})">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="header-home__title header-home__title--features">{{Voyager::setting('site.title_why')}}<br/>{{Voyager::setting('site.ket_why')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div id="headerId" style="display:none">
        <header class="header-home header-home--color">
            <div class="background"
                 style="background-position-y: bottom;
                     background-repeat-y: no-repeat;
                     background-repeat: repeat-x;
                     background-size: contain;
                     background-image: url({{Voyager::image(setting('site.bg_why'))}})">
                @php $site_logo = Voyager::setting('site.logo', ''); @endphp
                <div class="container background background--right background--features background--header"
                     style="background-image: url({{asset('storage/'.$site_logo)}})">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="header-home__title header-home__title--features">{{Voyager::setting('site.id_title_why')}}<br/>{{Voyager::setting('site.id_ket_why')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
@endsection
@section('content')

    <div id="contentEn">
        <section class="section">
            <div class="topbar-wrapper">
                <nav class="topbar">
                    <div class="container">
                        <div class="row" id="menu">
                            <div class="col-2 topbar__item">
                                <a class="link link--gray topbar__link active" href="#economic-growth">Economic Growth</a>
                            </div>
                            <div class="col-2 topbar__item">
                                <a class="link link--gray topbar__link" href="#investment-performance">Investment Performance</a>
                            </div>
                            <div class="col-2 topbar__item">
                                <a class="link link--gray topbar__link" href="#award">Award</a>
                            </div>
                            <div class="col-2 topbar__item">
                                <a class="link link--gray topbar__link" href="#supporting-infrastruktures">Supporting Infrastructure</a>
                            </div>
                            <div class="col-2 topbar__item">
                                <a class="link link--gray topbar__link" href="#wages">Minimum Wages</a>
                            </div>
                            <div class="col-2 topbar__item">
                                <a class="link link--gray topbar__link" href="#investment-core">Investment Cost</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="container jsfeatures">
                <div id="economic-growth" class="row about-app about-app--reverse">
                    <div class="col-6 about-app__description">
                        <div class="about-app__description-content">
                            <img src="{{Voyager::image(setting('site.icon_economic'))}}" style="width: 100px; height: 100px; margin-top: 50px" alt="Economic Growth">

                            <h4 class="about-app__description-title">Economic Growth</h4>

                            {{--<p>Tahun : {{$ekonomis[0]->tahun}}</p><br>
                        <p>Nilai Pertumbuhan : {{$ekonomis[0]->pertumbuhan}}</p><br>--}}
                            <div id="economic" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        </div>
                    </div>
                    <div class="col-6 about-app__img about-app__img--left">
                        <div class="about-app__img-wrap">
                            <img alt="" src="{{Voyager::image(setting('site.image_economic'))}}">
                        </div>
                    </div>
                </div>
                <div id="investment-performance" class="row about-app">
                    <div class="col-6 about-app__description">
                        <div class="about-app__description-content about-app__description-content--left">
                            <img src="{{Voyager::image(setting('site.icon_investment'))}}" style="width: 100px; height: 100px; margin-top: 50px" alt="Investment Performances">
                            <h4 class="about-app__description-title">Investment Performance</h4>
                            <select id="sel">
                                <option value="Sector">Sector</option>
                                <option value="Location">Location</option>
                                <option value="Country">Country</option>
                                <option value="PMA">PMA</option>
                                <option value="PMDN">PMDN</option>
                            </select>
                            <div id="realisasi_sektor" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                            <a href="http://web.dpmptsp.jatengprov.go.id/statistik_realisasi" class="site-btn site-btn--accent site-btn--right native__btn-first">
                                See Here</a>
                        </div>
                    </div>
                    <div class="col-6 about-app__img">
                        <div class="about-app__img-wrap">
                            <img alt="" src="{{Voyager::image(setting('site.image_investment'))}}">
                        </div>
                    </div>
                </div>

                @foreach($awards as $award)
                    <div id="award" class="row about-app about-app--reverse">
                        <div class="col-6 about-app__description">
                            <div class="about-app__description-content">
                                <img src="{{Voyager::image(setting('site.icon_award'))}}" style="width: 100px; height: 100px; margin-top: 50px" alt="Award">

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

                <div id="supporting-infrastruktures">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{Voyager::image(setting('site.icon_infrastructure'))}}" style="width: 100px; height: 100px; margin-top: 50px;display: block;margin-left: auto;margin-right: auto;" alt="Supporting Infrastructures">
                            <h3 class="section__title">Supporting Infrastructures</h3>
                        </div>
                    </div>
                    <div class="row features">
                        @foreach($infrastrukturs as $infrastruktur)
                        <div class="col-2 col-m-4 col-l-6">
                            <img src="{{Voyager::image($infrastruktur->gambar)}}" style="width: 100px; height: 100px; margin-top: 50px;display: block;margin-left: auto;margin-right: auto;" alt="Supporting Infrastructures">
                            <h3 class="section__title">{{$infrastruktur->nama_infrastruktur}}</h3>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="wages" class="row about-app about-app--reverse">
                    <div class="col-6 about-app__description">
                        <div class="about-app__description-content">
                            <img src="{{Voyager::image(setting('site.icon_umk'))}}" style="width: 100px; height: 100px; margin-top: 50px" alt="UMK">
                            <h4 class="about-app__description-title">Minimum Wages</h4>
                            <table id="wagestable" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Kab/Kota</th>
                                    <th>Tahun</th>
                                    <th>Nilai UMR</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($umks as $key => $umk)
                                    <tr>

                                        <td>{{$user->where('id', $key)->first()->kota->kabkota->nama}}</td>


                                        <td>@foreach($umk as $key2 => $um){{$key2}} <br>@endforeach</td>
                                        <td>@foreach($umk as $key2 => $um){{$um[0]->nilai_umr}} <br>@endforeach</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="col-6 about-app__img about-app__img--left">
                        <div class="about-app__img-wrap">
                            <img alt="" src="{{Voyager::image(setting('site.image_umk'))}}">
                        </div>
                    </div>
                </div>


                <div id="investment-core" class="row about-app">
                    <div class="col-6 about-app__description">

                        <div class="row faq">
                            <div class="about-app__description-content about-app__description-content--left">
                                <img src="{{Voyager::image(setting('site.icon_cost'))}}" style="width: 100px; height: 100px; margin-top: 50px" alt="Investment Cost">
                                <h4 class="about-app__description-title">Investment Cost</h4>
                            </div>
                            <div id="top" class="col-12 col-t-12">
                                <div class="faq__content">
                                    <div id="chapter1" class="faq__chapter chapter">
                                        <div class="faq__card card">
                                            <h4 class="faq__card-title">Electricity
                                                <span class="faq__card-icon"><i class="mdi mdi-chevron-down"></i></span>
                                            </h4>
                                            <div class="faq__card-description">
                                                <table id="listrik" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>User Category</th>
                                                        <th>Code</th>
                                                        <th>Capacity</th>
                                                        <th>Tariff (IDR/kVA)</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($listriks as $listrik)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$listrik->kategori->user_category}}</td>
                                                            <td>{{$listrik->code}}</td>
                                                            <td>{{$listrik->capacity}}</td>
                                                            <td>{{$listrik->tarif}}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="faq__card card">
                                            <h4 class="faq__card-title">Water
                                                <span class="faq__card-icon"><i class="mdi mdi-chevron-down"></i></span></h4>
                                            <div class="faq__card-description">
                                                <table id="water" class="uk-table uk-table-hover uk-table-striped" style="width:100%; text-align: center">
                                                    <thead>
                                                    <tr>
                                                        <th rowspan="3">No</th>
                                                        <th rowspan="3">User Category</th>
                                                        <th colspan="3">Consumption Block (IDR/m3)</th>
                                                    </tr>
                                                    <tr>
                                                        <th>I</th>
                                                        <th>II</th>
                                                        <th>III</th>
                                                    </tr>
                                                    <tr>
                                                        <th>0-10m3</th>
                                                        <th>11-20m3</th>
                                                        <th>> 20m3</th>
                                                    </tr>
                                                    </thead>
                                                    <tbpdy>
                                                        @foreach($airs as $air)
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{$air->user_category}}</td>
                                                            </tr>
                                                            @foreach($air->air as $detail)
                                                                <tr>
                                                                    <td>

                                                                    </td>
                                                                    <td>{{$detail->category}}</td>
                                                                    <td>{{$detail->first}}</td>
                                                                    <td>{{$detail->second}}</td>
                                                                    <td>{{$detail->third}}</td>
                                                                </tr>
                                                            @endforeach
                                                        @endforeach
                                                    </tbpdy>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 about-app__img">
                        <div class="about-app__img-wrap">
                            <img alt="" src="{{Voyager::image(setting('site.image_cost'))}}">
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <div id="contentId" style="display:none">
        <section class="section">
            <div class="topbar-wrapper">
                <nav class="topbar">
                    <div class="container">
                        <div class="row" id="menu">
                            <div class="col-2 topbar__item">
                                <a class="link link--gray topbar__link active" href="#economic-growth">Pertumbuhan Ekonomi</a>
                            </div>
                            <div class="col-2 topbar__item">
                                <a class="link link--gray topbar__link" href="#investment-performance">Performa Investasi</a>
                            </div>
                            <div class="col-2 topbar__item">
                                <a class="link link--gray topbar__link" href="#award">Penghargaan</a>
                            </div>
                            <div class="col-2 topbar__item">
                                <a class="link link--gray topbar__link" href="#supporting-infrastruktures">Infrastruktur Pendukung</a>
                            </div>
                            <div class="col-2 topbar__item">
                                <a class="link link--gray topbar__link" href="#wages">UMK</a>
                            </div>
                            <div class="col-2 topbar__item">
                                <a class="link link--gray topbar__link" href="#investment-core">Biaya Investasi</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="container jsfeatures">
                <div id="economic-growth" class="row about-app about-app--reverse">
                    <div class="col-6 about-app__description">
                        <div class="about-app__description-content">
                            <img src="{{Voyager::image(setting('site.icon_economic'))}}" style="width: 100px; height: 100px; margin-top: 50px" alt="Economic Growth">

                            <h4 class="about-app__description-title">Pertumbuhan Ekonomi</h4>

                            <div id="economic" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        </div>
                    </div>
                    <div class="col-6 about-app__img about-app__img--left">
                        <div class="about-app__img-wrap">
                            <img alt="" src="{{Voyager::image(setting('site.image_economic'))}}">
                        </div>
                    </div>
                </div>
                <div id="investment-performance" class="row about-app">
                    <div class="col-6 about-app__description">
                        <div class="about-app__description-content about-app__description-content--left">
                            <img src="{{Voyager::image(setting('site.icon_investment'))}}" style="width: 100px; height: 100px; margin-top: 50px" alt="Investment Performances">
                            <h4 class="about-app__description-title">Performa Investasi</h4>
                            <select id="sel">
                                <option value="Sector">Sector</option>
                                <option value="Location">Location</option>
                                <option value="Country">Country</option>
                                <option value="PMA">PMA</option>
                                <option value="PMDN">PMDN</option>
                            </select>
                            <div id="realisasi_sektor" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

                        </div>
                    </div>
                    <div class="col-6 about-app__img">
                        <div class="about-app__img-wrap">
                            <img alt="" src="{{Voyager::image(setting('site.image_investment'))}}">
                        </div>
                    </div>
                </div>

                @foreach($awards as $award)
                    <div id="award" class="row about-app about-app--reverse">
                        <div class="col-6 about-app__description">
                            <div class="about-app__description-content">
                                <img src="{{Voyager::image(setting('site.icon_award'))}}" style="width: 100px; height: 100px; margin-top: 50px" alt="Award">

                                <h4 class="about-app__description-title">Penghargaan</h4>
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

                <div id="supporting-infrastruktures">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{Voyager::image(setting('site.icon_infrastructure'))}}" style="width: 100px; height: 100px; margin-top: 50px;display: block;margin-left: auto;margin-right: auto;" alt="Supporting Infrastructures">
                            <h3 class="section__title">Supporting Infrastructures</h3>
                        </div>
                    </div>
                    <div class="row features">
                        @foreach($infrastrukturs as $infrastruktur)
                            <div class="col">
                                <img src="{{Voyager::image($infrastruktur->gambar)}}" style="width: 100px; height: 100px; margin-top: 50px;display: block;margin-left: auto;margin-right: auto;" alt="Supporting Infrastructures">
                                <h3 class="section__title">{{$infrastruktur->nama_infrastruktur}}</h3>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="wages" class="row about-app about-app--reverse">
                    <div class="col-6 about-app__description">
                        <div class="about-app__description-content">
                            <img src="{{Voyager::image(setting('site.icon_umk'))}}" style="width: 100px; height: 100px; margin-top: 50px" alt="UMK">
                            <h4 class="about-app__description-title">UMK</h4>

                            <div class="row faq">
                                <div id="top" class="col-12 col-t-12">
                                    <div class="faq__content">
                                <div id="chapter1" class="faq__chapter chapter">
                                    <div class="faq__card card">
                                        <h4 class="faq__card-title">Detail UMK
                                            <span class="faq__card-icon"><i class="mdi mdi-chevron-down"></i></span>
                                        </h4>
                                        <div class="faq__card-description">
                                            <table id="wagestable" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>Kab/Kota</th>
                                                    <th>Tahun</th>
                                                    <th>Nilai UMK</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($umks as $key => $umk)
                                                    <tr>

                                                        <td>{{$user->where('id', $key)->first()->kota->kabkota->nama}}</td>


                                                        <td>@foreach($umk as $key2 => $um){{$key2}} <br>@endforeach</td>
                                                        <td>@foreach($umk as $key2 => $um){{$um[0]->nilai_umr}} <br>@endforeach</td>

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="col-6 about-app__img about-app__img--left">
                        <div class="about-app__img-wrap">
                            <img alt="" src="{{Voyager::image(setting('site.image_umk'))}}">
                        </div>
                    </div>
                </div>


                <div id="investment-core" class="row about-app">
                    <div class="col-6 about-app__description">

                        <div class="row faq">
                            <div class="about-app__description-content about-app__description-content--left">
                                <img src="{{Voyager::image(setting('site.icon_cost'))}}" style="width: 100px; height: 100px; margin-top: 50px" alt="Investment Cost">
                                <h4 class="about-app__description-title">Biaya Investasi</h4>
                            </div>
                            <div id="top" class="col-12 col-t-12">
                                <div class="faq__content">
                                    <div id="chapter1" class="faq__chapter chapter">
                                        <div class="faq__card card">
                                            <h4 class="faq__card-title">Electricity
                                                <span class="faq__card-icon"><i class="mdi mdi-chevron-down"></i></span>
                                            </h4>
                                            <div class="faq__card-description">
                                                <table id="listrik" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>User Category</th>
                                                        <th>Code</th>
                                                        <th>Capacity</th>
                                                        <th>Tariff (IDR/kVA)</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($listriks as $listrik)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$listrik->kategori->user_category}}</td>
                                                            <td>{{$listrik->code}}</td>
                                                            <td>{{$listrik->capacity}}</td>
                                                            <td>{{$listrik->tarif}}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="faq__card card">
                                            <h4 class="faq__card-title">Water
                                                <span class="faq__card-icon"><i class="mdi mdi-chevron-down"></i></span></h4>
                                            <div class="faq__card-description">
                                                <table id="water" class="uk-table uk-table-hover uk-table-striped" style="width:100%; text-align: center">
                                                    <thead>
                                                    <tr>
                                                        <th rowspan="3">No</th>
                                                        <th rowspan="3">User Category</th>
                                                        <th colspan="3">Consumption Block (IDR/m3)</th>
                                                    </tr>
                                                    <tr>
                                                        <th>I</th>
                                                        <th>II</th>
                                                        <th>III</th>
                                                    </tr>
                                                    <tr>
                                                        <th>0-10m3</th>
                                                        <th>11-20m3</th>
                                                        <th>> 20m3</th>
                                                    </tr>
                                                    </thead>
                                                    <tbpdy>
                                                        @foreach($airs as $air)
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{$air->user_category}}</td>
                                                            </tr>
                                                            @foreach($air->air as $detail)
                                                                <tr>
                                                                    <td>

                                                                    </td>
                                                                    <td>{{$detail->category}}</td>
                                                                    <td>{{$detail->first}}</td>
                                                                    <td>{{$detail->second}}</td>
                                                                    <td>{{$detail->third}}</td>
                                                                </tr>
                                                            @endforeach
                                                        @endforeach
                                                    </tbpdy>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 about-app__img">
                        <div class="about-app__img-wrap">
                            <img alt="" src="{{Voyager::image(setting('site.image_cost'))}}">
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <div id="endMenu">
        <img alt="" class="section__img" src="{{asset('images/frontend/img_backgroud_footer.png')}}">
    </div>
@endsection
@section('footer')
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
@endsection
@section('js')
    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("menu");
        var btns = header.getElementsByClassName("link link--gray topbar__link");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
    <script>
        'use strict';

        //Fixed topbar
        let mTop = $('.topbar').offset().top;
        let eTop = $('#endMenu').offset().top;
        $(window).on('scroll', function () {
            let top = $(document).scrollTop();

            if (top >= (mTop - 100) && top <= (eTop - 350)) {
                $('.topbar').addClass('topbar--fixed').removeAttr('style');
                $('.jsfeatures').addClass('jsfeatures--active');
            } else if (top >= (eTop - 350) && top <= (eTop - 150)) {
                $('.topbar').css({'transform': 'translateY(-150px)'});
            } else {
                $('.topbar').removeClass('topbar--fixed').removeAttr('style');
                $('.jsfeatures').removeClass('jsfeatures--active');
            }
        });

        //topbar
        $(window).on('scroll', function () {
            let $sections = $('.about-app');
            $sections.each(function (i, el) {
                let top = $(el).offset().top - 283;
                let bottom = top + $(el).height() + 105;
                let scroll = $(window).scrollTop();
                let id = $(el).attr('id');
                if (scroll > top && scroll < bottom) {
                    $('a.active').removeClass('active');
                    $('a[href=\'#' + id + '\']').addClass('active');
                }
            })
        });

        //Anchors
        $(function () {
            $('a[href^=\'#\']').on('click', function () {
                let target = $(this).attr('href');
                $('html, body').animate({scrollTop: $(target).offset().top}, 800);
                return false;
            });
        });
    </script>
    <script src="{{asset('js/front-end/faq.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.uikit.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#wagestable').DataTable({
                "pageLength": 5
            });
        } );
    </script>
    <script>
        $(document).ready(function() {
            $('#listrik').DataTable({
                "pageLength": 20,
                responsive: true
            });
        } );
    </script>
    <script>
        $(document).ready(function() {
            $('#water').DataTable({
                "pageLength": 5,
                responsive: true
            });
        } );
    </script>
    <script>
        var label = [];
        var data = [];

        var economic_lbl = {!! $ekonomis !!};

        var i;

        for(i=0; i<economic_lbl.length; i++){
            label.push(economic_lbl[i].tahun);
            data.push(Math.abs(economic_lbl[i].pertumbuhan.replace(',', '.')));
        }


        Highcharts.chart('economic', {
            chart: {
                type: 'line',
                backgroundColor: null
            },
            title: {
                text: 'Central Java Economic Growth'
            },
            subtitle: {
                text: 'DPMPTSP Provinsi Jawa Tengah'
            },
            xAxis: {
                categories: label
            },
            yAxis: {
                title: {
                    text: 'Growth'
                }
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Central Java Economic Growth',
                data: data
            }]
        });
    </script>

    <script>
        var t ={!! json_encode($obj) !!};
        var data = [];
        var datalokasi = [];
        var datanegara = [];
        var datapma = [];
        var datapmdn = [];
        //console.log(t.by_sector[0])
        //Sektor
        for (i=0;i<t.by_sector.length; i++){
            data.push(t.by_sector[i])
        }
        //Lokasi
        for (i=0;i<t.by_lokasi.length; i++){
            datalokasi.push(t.by_lokasi[i])
        }
        //Negara
        for (i=0;i<t.by_country.length; i++){
            datanegara.push(t.by_country[i])
        }
        //PMA
        for (i=0;i<t.pmdn.length; i++){
            datapma.push(t.pmdn[i])
        }
        //PMDN
        for (i=0;i<t.pma.length; i++){
            datapmdn.push(t.pma[i])
        }

        /*console.log('SEKTOR');
        console.log(data);
        console.log('LOKASI');
        console.log(datalokasi);
        console.log('NEGARA');
        console.log(datanegara);
        console.log('PMA');
        console.log(datapma);
        console.log('PMDN');
        console.log(datapmdn);*/

        //SEKTOR
        var output = data.map( s => {
            if ( s.hasOwnProperty("sektor") )
            {
                s.name = s.sektor;
                delete s.sektor;
            }

            if ( s.hasOwnProperty("total") )
            {
                s.y = s.total;
                delete s.total;
            }
            return s;
        });
        //LOKASI
        var outputlokasi = datalokasi.map( s => {
            if ( s.hasOwnProperty("kab_kota") )
            {
                s.name = s.kab_kota;
                delete s.kab_kota;
            }

            if ( s.hasOwnProperty("total") )
            {
                s.y = s.total;
                delete s.total;
            }
            return s;
        });
        //NEGARA
        var outputnegara = datanegara.map( s => {
            if ( s.hasOwnProperty("negara") )
            {
                s.name = s.negara;
                delete s.negara;
            }

            if ( s.hasOwnProperty("total") )
            {
                s.y = s.total;
                delete s.total;
            }
            return s;
        });
        //PMDN
        var outputpmdn = datapmdn.map( s => {
            if ( s.hasOwnProperty("sektor") )
            {
                s.name = s.sektor;
                delete s.sektor;
            }

            if ( s.hasOwnProperty("total") )
            {
                s.y = parseFloat(s.total);
                delete s.total;
            }
            return s;
        });
        //PMA
        var outputpma = datapma.map( s => {
            if ( s.hasOwnProperty("sektor") )
            {
                s.name = s.sektor;
                delete s.sektor;
            }

            if ( s.hasOwnProperty("total") )
            {
                s.y = parseFloat(s.total);
                delete s.total;
            }
            return s;
        });


        var chart = Highcharts.chart('realisasi_sektor', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie',
                backgroundColor: null
            },
            title: {
                text: 'Realisasi Investasi Triwulan I 2019'
            },
            credits: {
                enabled: false
            },
            tooltip: {
                pointFormat: '{series.sektor}: <b>{point.y}</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y}'
                    }
                }
            },
            series: [{
                name: 'Sektor',
                colorByPoint: true,
                data: output
            }]
        });
        //console.log(chart.series[0])
        $("#sel").change(function () {
            var selected = this.value;

            if (selected === 'Sector'){
                chart.series[0].update({
                    name: 'Realisasi Investasi berdasarkan ' + this.value,
                    data: output
                })
            }
            else if(selected === 'Location'){
                chart.series[0].update({
                    name: 'Realisasi Investasi berdasarkan ' + this.value,
                    data: outputlokasi
                })
            }
            else if(selected === 'Country'){
                chart.series[0].update({
                    name: 'Realisasi Investasi berdasarkan ' + this.value,
                    data: outputnegara
                })
            }
            else if(selected === 'PMA'){
                chart.series[0].update({
                    name: 'Realisasi Investasi berdasarkan ' + this.value,
                    data: outputpma
                })
            }
            else if(selected === 'PMDN'){
                chart.series[0].update({
                    name: 'Realisasi Investasi berdasarkan ' + this.value,
                    data: outputpmdn
                })
            }

        })


    </script>
@endsection

