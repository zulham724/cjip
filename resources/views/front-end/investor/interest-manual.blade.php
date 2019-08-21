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

    <div class="col-8 col-m-8">
        <div class="card post__card post__card--comments">
            <p class="card__title" style="text-align: center"><strong style="color: #ff5c72">Thank You :)</strong></p>
            <div class="post__write-comment post__write-comment--main form form--comment">
                <form class="form__form" action="{{route('store.interest')}}" method="post">
                    @csrf
                    <div class="form__form-group form__form-group--without-label">
                        <select class="form__input form__input--select js-field__sector" name="sektor" title="Sector">
                            @foreach($sektors as $sector)
                                <option value="{{$sector->id}}">{{$sector->nama}}</option>
                            @endforeach
                        </select>
                        <div class="form__input-icon-wrap">
                            <span class="form__input-icon"><i class="mdi mdi-chevron-down"></i></span>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__form-group">
                            <label class="form__label">City<span>*</span></label>
                            <select class="form__input form__input--select js-field__city" name="kab_kota" title="Cities">
                                @foreach($cities as $city)
                                    <option value="{{$city->user->kab_kota_id}}">{{$city->nama}}</option>
                                @endforeach
                            <i class="mdi mdi-chevron-down"></i>
                            </select>

                        </div>
                        <div class="form__form-group">
                            <label class="form__label">Investment Location<span>*</span></label>
                            <input class="form__input js-field__name" type="text" name="lokasi" placeholder="Exact Location" required>
                            <span class="form-validation"></span>
                        </div>
                    </div>

                    <div class="form__group" style="margin-top: 20px">
                        <label class="form__label">Currency<span>*</span></label>
                        <div class="col-2">
                            <select class="form__input form__input dropdown-toggle" id="alarm_action" required>
                                <option value=''></option>
                                <option value='rupiah'>Rupiah</option>
                                <option value='dollar'>Dollar</option>
                            </select>
                        </div>
                        <div class="col-10">
                            <input class="form__input" name="rp" id="rp" style="display: none" />
                            <input class="form__input" name="usd" id="usd" style="display: none" />
                            <span class="focus-input100"></span>
                        </div>

                    </div>
                    <button class="site-btn site-btn--accent form__submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('right')
    @include('front-end.sidebar')
@endsection


@section('js')
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script>
        $('#rp').inputmask("numeric", {
            radixPoint: ".",
            groupSeparator: ".",
            digits: 3,
            autoGroup: true,
            /* prefix: 'Rp. ',*/ //Space after $, this will not truncate the first character.
            rightAlign: false,
            oncleared: function () {
                self.Value('');
            }
        });
    </script>
    <script>
        $('#usd').inputmask("numeric", {
            radixPoint: ".",
            groupSeparator: ".",
            digits: 3,
            autoGroup: true,
            /* prefix: 'Rp. ',*/ //Space after $, this will not truncate the first character.
            rightAlign: false,
            oncleared: function () {
                self.Value('');
            }
        });
    </script>
    <script>
        var alarmInput = $('#alarm_action');
        alarmInput.on('change', function () {
            var rp = $('#rp');
            var usd = $('#usd');
            //this == alarmInput within this change handler
            switch ($(this).val()) {
                case 'rupiah':
                    rp.show();
                    usd.hide();
                    break;
                case 'dollar':
                    rp.hide();
                    usd.show();
                    break;
            }
        });
    </script>
@endsection
