@extends('front-end.master.newest-master')
@section('css')
    <style>

        .modal-open {
            overflow: hidden;
        }
        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            display: none;
            overflow: hidden;
            -webkit-overflow-scrolling: touch;
            outline: 0;
        }
        .modal.fade .modal-dialog {
            -webkit-transform: translate(0, -25%);
            -ms-transform: translate(0, -25%);
            -o-transform: translate(0, -25%);
            transform: translate(0, -25%);
            -webkit-transition: -webkit-transform 0.3s ease-out;
            -o-transition: -o-transform 0.3s ease-out;
            transition: transform 0.3s ease-out;
        }
        .modal.in .modal-dialog {
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0);
        }
        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto;
        }
        .modal-dialog {
            position: relative;
            width: auto;
            margin: 10px;
        }
        .modal-content {
            position: relative;
            background-color: #ffffff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #999999;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 6px;
            -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
            box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
            outline: 0;
        }
        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000000;
        }
        .modal-backdrop.fade {
            filter: alpha(opacity=0);
            opacity: 0;
        }
        .modal-backdrop.in {
            filter: alpha(opacity=50);
            opacity: 0.5;
        }
        .modal-header {
            padding: 15px;
            border-bottom: 1px solid #e5e5e5;
        }
        .modal-header .close {
            margin-top: -2px;
        }
        .modal-title {
            margin: 0;
            line-height: 1.42857143;
        }
        .modal-body {
            position: relative;
            padding: 15px;
        }
        .modal-footer {
            padding: 15px;
            text-align: right;
            border-top: 1px solid #e5e5e5;
        }
        .modal-footer .btn + .btn {
            margin-bottom: 0;
            margin-left: 5px;
        }
        .modal-footer .btn-group .btn + .btn {
            margin-left: -1px;
        }
        .modal-footer .btn-block + .btn-block {
            margin-left: 0;
        }
        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll;
        }
        @media (min-width: 768px) {
            .modal-dialog {
                width: 600px;
                margin: 30px auto;
            }
            .modal-content {
                -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            }
            .modal-sm {
                width: 300px;
            }
        }
        @media (min-width: 992px) {
            .modal-lg {
                width: 900px;
            }
        }
        .clearfix:before,
        .clearfix:after,
        .modal-header:before,
        .modal-header:after,
        .modal-footer:before,
        .modal-footer:after {
            display: table;
            content: " ";
        }
        .clearfix:after,
        .modal-header:after,
        .modal-footer:after {
            clear: both;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@endsection
@section('header')
    <header class="header-home header-home--color">

        <div class="background background--clouds">
            @php $site_logo = Voyager::setting('site.logo', ''); @endphp
            <div class="container background background--right background--features background--header"
                 style="background-image: url({{asset('storage/'.$site_logo)}})">
                <div class="row">
                    <div class="col-12">
                        <h2 class="header-home__title header-home__title--features">Explore it, Invest on it</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('content')
<div class="container">
    <div class="col-12 col-m-12">
        <div class="card post__card post__card--comments">
            <p class="card__title" style="text-align: center">Select <strong style="color: #ff5c72">sectors</strong> in which you like to <strong style="color: #ff5c72">invest</strong></p>
            <div class="post__write-comment post__write-comment--main form form--comment">
                <select class="form__input form__input--select js-field__sector" name="sektor" id="sektor" title="Sector">
                    <option value="" selected disabled>Select Sektor</option>
                @foreach($sektors as $sector)
                        <option value="{{$sector->id}}">{{$sector->name}}</option>
                    @endforeach
                </select>

                <div id="command" style="padding-left: 30px;padding-top: 30px; background-color: #ff4a52">
                    <h3 class="m-0" style="padding-bottom: 30px" align="center">Select Sector First</h3>
                </div>

                <div id="proyek"></div>

            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
    <script src="{{asset('js/front-end/vendor/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/front-end/vendor/slick.min.js')}}"></script>

    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    {{--<script>
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
    </script>--}}
    <script>
        $(document).ready(function(){


            $('#sektor').change(function(){

                var e = document.getElementById("sektor");
                var id = e.options[e.selectedIndex].value;
                console.log(id);
                $('#proyek').load('/interest-sector/'+id).fadeIn('slow');
                $('#command').hide();
            });
        });
    </script>
@endsection
