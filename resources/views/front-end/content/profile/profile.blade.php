@extends('front-end.master.front-end')

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
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="section__title">Profil Jawa Tengah</h3>
                    </div>
                </div>
                {{--@isset($visimisis)

                    <div class="row about-app">
                        <div class="col-6 about-app__description">
                            <div class="about-app__description-content about-app__description-content--left">
                                <h4 class="about-app__description-title">Visi Misi</h4>
                                <span class="text">
                                    <p>
                                        {!! $visimisis->visi_misi !!}
                                    </p>
                                </span>
                            </div>
                        </div>
                        <div class="col-3 about-app__img">
                            <div class="about-app__img-wrap">
                                <img alt="" src="{{Voyager::image($visimisis->foto_gub)}}">
                                <p style="font-weight: 500; color: #c82333">{{ $visimisis->nama_gub }}</p>
                            </div>
                        </div>
                        <div class="col-3 about-app__img">
                            <div class="about-app__img-wrap">
                                <img alt="" src="{{Voyager::image($visimisis->foto_wagub)}}">
                                <p style="font-weight: 500; color: #c82333">{{ $visimisis->nama_wagub }}</p>
                            </div>
                        </div>
                        <div class="col-12 about-app__description">
                            <div class="">
                                <h4 class="about-app__description-title" style="text-align: center !important;">Program Unggulan</h4>
                                <span class="text">
                                    <p>
                                        {!! $visimisis->program_unggulan !!}
                                    </p>
                                </span>
                            </div>
                        </div>
                    </div>
                @endisset--}}

                <div class="row leadership">
                    @foreach($kabkotas as $list)
                        <div class="col-3 col-t-6">
                            <a href="{{route('detail.profile_jateng', $list->id)}}">
                                <div class="leadership__item">
                                    <img alt="" class="leadership__avatar" src="{{ Voyager::image($list->avatar) }}">
                                    <p class="leadership__name">{{$list->name}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <hr>
            </div>
        </section>
    </div>
@endsection


