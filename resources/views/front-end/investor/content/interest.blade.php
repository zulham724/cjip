
<div class="row">
    @foreach($proyeks as $proyek)
    <div class="col-6" style="padding: 10px">
        <div class="pricing__card card">
            <div class="pricing__card-price-wrap">
                @isset($proyek->fotos)
                    @php
                        $images = json_decode($proyek->fotos)
                    @endphp
                    <div class="carousel">
                        <div class="item">
                            <div class="about-app__img-wrap">
                                <img src="{{Voyager::image($images[0])}}" style="max-width: 685px; max-height: 400px" alt="{{$proyek->project_name}}">
                            </div>
                        </div>
                    </div>

                @else
                    <img alt="" src="{{'storage/'.Voyager::setting('site.not_found')}}">
                @endisset
            </div>
            <h4 class="pricing__card-title">
                <p>{{$proyek->project_name}}</p>
            </h4>
            @if($proyek->market_id == 1)
                <div class="site-btn site-btn--light header-home__btn" style="margin-bottom: 30px; width: 100%; color: #24c829" disabled><i class="mdi mdi-star">Siap Ditawarkan</i></div>
            @elseif($proyek->market_id == 2)
                <div class="site-btn site-btn--light header-home__btn" style="margin-bottom: 30px; width: 100%; color: #c8b735" disabled><i class="mdi mdi-star-half">Proyek Prospektif</i></div>
            @else
                <div class="site-btn site-btn--light header-home__btn" style="margin-bottom: 30px; width: 100%; color: #c82333" disabled><i class="mdi mdi-star-outline">Proyek Potensial</i></div>
            @endif
            <div class="row" align="center">
                <div class="col-4 col-md-12 col-sm-12">
                    @if($proyek->market_id == 1)
                        <a href="{{route('detail.rto', ['id'=>$proyek->id,'slug' => str_slug($proyek->project_name, '-')])}}" class="site-btn site-btn--accent header-home__btn" style="margin-bottom: 30px">Detail Proyek</a>
                    @elseif($proyek->market_id == 2)
                        <a href="{{route('detail.pros', ['id'=>$proyek->id,'slug' => str_slug($proyek->project_name, '-')])}}" class="site-btn site-btn--accent header-home__btn" style="margin-bottom: 30px">Detail Proyek</a>
                    @else
                        <a href="{{route('detail.pot', ['id'=>$proyek->id,'slug' => str_slug($proyek->project_name, '-')])}}" class="site-btn site-btn--accent header-home__btn" style="margin-bottom: 30px">Detail Proyek</a>
                    @endif
                </div>
                <div class="col-4 col-md-12 col-sm-12">
                    <a href="{{route('detail.profile', ['id'=>$proyek->profil_id,'slug' => str_slug($proyek->project_name, '-')])}}" class="site-btn site-btn--light header-home__btn" style="margin-bottom: 30px">{{$proyek->byUser->namakota[0]->nama}}</a>
                </div>
                <div class="col-4 col-md-12 col-sm-12">
                    @isset($profile)
{{--                    <form action="{{route('store.interest')}}" method="post">--}}

                        {{--<input type="text" class="form-control" name="profil" value="{{$profile->id}}" hidden>
                        <input type="text" class="form-control" name="kabkota" value="{{$proyek->kab_kota_id}}" hidden>
                        <input type="text" class="form-control" name="sektor" value="{{$proyek->bySector->name}}" hidden>
                        <input type="text" class="form-control" name="project_id" value="{{$proyek->id}}" hidden>--}}
                        <div class="my-auto ml-auto" align="center">
                            <button type="submit" class="site-btn site-btn--accent header-home__btn" data-toggle="modal" data-target="#myModal"><i class="mdi mdi-star mdi-spin">Invest Here</i></button>
                        </div>
{{--                    </form>--}}
                    @else
                        <a href="{{route('form.profile', Auth::guard('investor')->user()->id)}}">
                            <button class="site-btn site-btn--invert header-home__btn"><i class="mdi-minus-circle mdi-spin">Isi Profil Perusahaan Terlebih Dahulu</i></button>
                        </a>
                    @endisset
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" style="background-color: transparent;" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{$proyek->translate('en')->project_name}}, {{$proyek->project_name}}</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure want to invest in {{$proyek->translate('en')->project_name}} Project?</p><br>
                        <p>We will contact you as soon as possible</p>
                    </div>
                    @isset($profile)
                    <form action="{{route('store.interest')}}" method="post">
                        @csrf
                        <input type="text" class="form-control" name="profil" value="{{$profile->id}}" hidden>
                        <input type="text" class="form-control" name="kabkota" value="{{$proyek->kab_kota_id}}" hidden>
                        <input type="text" class="form-control" name="sektor" value="{{$proyek->bySector->name}}" hidden>
                        <input type="text" class="form-control" name="project_id" value="{{$proyek->id}}" hidden>

                    <div class="modal-footer">
                        <button type="submit" class="site-btn site-btn--accent header-home__btn">Sure</button>
                        <button type="button" class="site-btn site-btn--invert header-home__btn" data-dismiss="modal">Cancel</button>
                    </div>
                    </form>
                    @endisset
                </div>

            </div>
        </div>
    </div>
    @endforeach
    <!-- Modal -->

</div>