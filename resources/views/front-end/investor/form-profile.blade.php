<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/front-end/main.css')}}" id="main_style">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,800" rel="stylesheet">
    <link href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('css/slider.css')}}">--}}
    <title>{{setting('site.title')}}</title>
    <link rel="icon" href="{{voyager_asset(setting('site.logo'))}}" type="image/png">

    @yield('css')
</head>
<body>


<section class="section">

    <div class="container" style="padding-left: 20%;padding-right: 20%">
        <div class="row post">
            <div class="card post__card post__card--comments">
                <p class="card__title" style="text-align: center">First, Fill your <strong style="color: #ff5c72">Company Profile</strong></p>
                <div class="post__write-comment post__write-comment--main form form--comment">
                    <form class="form__form" action="{{route('store.profile')}}" method="post">
                        @csrf
                        <div class="form__group">
                            <div class="form__form-group" style="width: calc(33.3333% - 11px);">
                                <label class="form__label">Name <span>*</span></label>
                                <input class="form__input js-field__name" type="text" name="name" placeholder="{{$user->name}}" value="{{$user->name}}" required>
                                <span class="form-validation"></span>
                            </div>
                            <div class="form__form-group" style="width: calc(33.3333% - 11px);">
                                <label class="form__label">Position<span>*</span></label>
                                <input class="form__input js-field__name" type="text" name="jabatan" placeholder="CEO" required>
                                <span class="form-validation"></span>
                            </div>
                            <div class="form__form-group" style="width: calc(33.3333% - 11px);">
                                <label class="form__label">Phone <span>*</span></label>
                                <input class="form__input js-field__url" name="phone" type="text" placeholder="083 298 xxx xxx" required>
                                <span class="form-validation"></span>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="form__form-group" style="width: calc(33.3333% - 11px);">
                                <label class="form__label">Company Name <span>*</span></label>
                                <input class="form__input js-field__name" type="text" name="company_name" placeholder="without PT./ or CV." required>
                                <span class="form-validation"></span>
                            </div>
                            <div class="form__form-group" style="width: calc(33.3333% - 11px);">
                                <label class="form__label">Legal Entity Status <span>*</span></label>
                                <input class="form__input js-field__name" type="text" name="badan_hukum" placeholder="PT. or CV." required>
                                <span class="form-validation"></span>
                            </div>
                            <div class="form__form-group" style="width: calc(33.3333% - 11px);">
                                <label class="form__label">Country <span>*</span></label>
                                <input class="form__input js-field__name" type="text" name="country" placeholder="Indonesia" required>
                                <span class="form-validation"></span>
                            </div>
                        </div>
                        <div class="form__form-group">
                            <label class="form__label">Bussiness Field<span>*</span></label>
                            <select class="form__input form__input--select" name="bidang_usaha" title="Business Field">
                                @foreach($sektors as $sektor)
                                    <option value="{{$sektor->name}}">{{$sektor->name}}</option>
                                @endforeach
                                <i class="mdi mdi-chevron-down"></i>
                            </select>
                        </div>
                        <div class="form__form-group">
                            <label class="form__label">Company Address <span>*</span></label>
                            <textarea class="form__input form__input--textarea js-field__message" type="address" name="address" required
                                      placeholder="Company's address here..."></textarea>
                            <span class="form-validation"></span>
                        </div>

                        <button class="site-btn site-btn--accent form__submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
    </div>
</section>


<hr>

<!--Footer-->
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
<!--Footer-->

{{--<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>--}}
<script src="{{asset('js/front-end/vendor/jquery-2.2.4.min.js')}}"></script>
<!--Selects-->
<script src="{{asset('js/front-end/vendor/jquery-editable-select.min.js')}}"></script>
<script src="{{asset('js/front-end/vendor/slick.min.js')}}"></script>
<!--Instagram-->
<script src="{{asset('js/front-end/vendor/lightwidget.js')}}"></script>

<script src="{{asset('js/front-end/menu.js')}}"></script>
<script src="{{asset('js/front-end/mobile-menu.js')}}"></script>
@yield('js')
</body>
</html>
