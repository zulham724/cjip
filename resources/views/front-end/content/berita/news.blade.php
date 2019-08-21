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
                <div class="col-12 col-m-12">
                    @foreach($news as $n)
                        <div class="card post__card wow fadeIn" data-wow-delay=".5s">
                            <div class="post__header">
                                <h4 class="post__title">{{$n->judul}}</h4>
                            </div>

                            <article class="post__content">
                                {{--<div class="carousel">
                                    <div class="slider carousel__slider--images">--}}
                                <div class="row">
                                    <div class="col-6">
                                        @php
                                            $images = json_decode($n->gambar_berita)
                                        @endphp
                                        @foreach($images as $image)
                                            {{--<div class="carousel__slide">--}}
                                            <img src="{{Voyager::image($image)}}" style="width: 50%; height: auto; align-self: center" alt="">
                                            {{--</div>--}}
                                        @endforeach
                                    </div>
                                    <div class="col-6">
                                        <p class="carousel__caption">{{$n->userId->name}}</p>
                                        <p>{!! str_limit($n->isi_berita, 300, '....')!!} <a href='{{route('berita.detail', $n->id)}}' class='btn btn-primary'>Read More</a></p>
                                    </div>
                                </div>

                                    {{--</div>
                                </div>--}}

                            </article>
                            <div class="post__bottom">
                                <div class="tags post__tags">
                                    <span class="site-btn site-btn--light tags__tag">Cloud</span>
                                    <span class="site-btn site-btn--light tags__tag">News</span>
                                    <span class="site-btn site-btn--light tags__tag">Update</span>
                                    <span class="site-btn site-btn--light tags__tag">Setup</span>
                                </div>
                                <hr/>
                                <div class="post__socials">
                                    <p class="post__social"><i class="mdi mdi-eye"></i> {{$n->getViewsCount()}} <span>views</span></p>
                                    <a class="post__social post__social--likes" data-post-id="post0003">
                                        <i class="mdi mdi-heart"></i> - <span>likes</span>
                                    </a>
                                    <p class="post__social post__social--like">I like it!</p>
                                </div>
                                <div id="comments"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection


