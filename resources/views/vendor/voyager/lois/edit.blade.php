@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->display_name_singular)

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->display_name_singular }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form" class="form-edit-add" action="{{route('voyager.lois.update', $dataTypeContent->getKey())}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @method('PATCH')
                        <div class="form-group col-lg-6">
                            <span class="control-label">Nama Perusahaan:</span>
                            <input class="form-control" type="text" name="perusahaan" id="perusahaan" placeholder="Nama Perusahaan" value="{{$dataTypeContent->nama_perusahaan}}" required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="form-group col-lg-6">
                            <span class="control-label">Bidang Usaha</span>
                            <input class="form-control" type="text" name="bidang_usaha" id="bidang_usaha" placeholder="Bidang Usaha"  value="{{$dataTypeContent->bidang_usaha}}"  required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="form-group col-lg-6">
                            <span class="control-label">Nama Pengusaha</span>
                            <input class="form-control" type="text" name="nama_pengusaha" placeholder="Nama Pengusaha" value="{{$dataTypeContent->nama_pengusaha}}"  required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="form-group col-lg-6">
                            <span class="control-label">Jabatan Pengusaha</span>
                            <input class="form-control" type="text" name="jabatan_pengusaha" placeholder="Jabatan Pengusaha" value="{{$dataTypeContent->jabatan_pengusaha}}"  required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="form-group col-lg-6">
                            <span class="control-label">Nomor Telp</span>
                            <input class="form-control" type="text" name="phone" placeholder="No Telp Pengusaha" value="{{$dataTypeContent->phone}}"  required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="form-group col-lg-6">
                            <span class="control-label">Email</span>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email Pengusaha" value="{{$dataTypeContent->email}}"  required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="form-group col-lg-6">
                            <span class="control-label">Alamat</span>
                            <input class="form-control" type="text" name="alamat" id="alamat" placeholder="Alamat Perusahaan" value="{{$dataTypeContent->alamat_perusahaan}}"  required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="form-group col-lg-6">
                            <span class="control-label">Lokasi Investasi</span>
                            <input class="form-control" type="text" name="lokasi_investasi" placeholder="Lokasi Investasi" value="{{$dataTypeContent->lokasi_investasi}}"  required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="form-group col-lg-6">
                            <span class="control-label">Tanggal LoI</span>
                            <input class="form-control" type="date" name="tgl_ttd" value="{{Carbon\Carbon::parse($dataTypeContent->tgl_ttd)->format('yyyy-MM-dd')}}" >
                            <span class="focus-input100"></span>
                        </div>

                        <div class="form-group col-lg-6">
                            <span class="control-label">Asal Negara</span>
                            <input class="form-control" type="text" name="asal_negara" value="{{$dataTypeContent->asal_negara}}" >
                            <span class="focus-input100"></span>
                        </div>

                        <div class="form-group col-lg-12">
                            <span class="control-label">Nilai Investasi</span>
                            <select name='alarm_action' class="form-control select2 select2-hidden-accessible" id="alarm_action"   required>
                                @if($dataTypeContent->nilai_rp == 0)
                                    <option value="">Mata Uang</option>
                                    <option value='rupiah'>Rupiah</option>
                                    <option value='dollar' selected>Dollar</option>
                                    @else
                                    <option value="">Mata Uang</option>
                                    <option value='rupiah' selected>Rupiah</option>
                                    <option value='dollar'>Dollar</option>
                                @endif

                            </select>
                            @if($dataTypeContent->nilai_rp == 0)
                            <input class="form-control" name="rp" id="rp" style="display: none" />
                            <input class="form-control" name="usd" id="usd"  value="{{$dataTypeContent->nilai_usd}}"/>
                            <span class="focus-input100"></span>
                                @else
                                <input class="form-control" name="rp" id="rp" value="{{$dataTypeContent->nilai_rp}}"  />
                                <input class="form-control" name="usd" id="usd" style="display: none"  />
                                <span class="focus-input100"></span>
                            @endif
                        </div>

                        <div class="form-group col-lg-12">
                            <span class="control-label">Status Proses</span>
                            <select name="status_proses" class="form-control select2 select2-hidden-accessible" id="status">
                                <option value="">Select</option>
                                @foreach($status as $st)
                                    @php
                                        $replace = array(" ", "/");
                                    @endphp
                                    <option value="{{$st->id}}">{{$st->nama_proses}}</option>
                                @endforeach
                            </select>
                            @foreach($status as $st)
                                @php
                                    $replace = array(" ", "/");
                                @endphp
                                <label for="{{str_replace($replace,'', strtolower($st->nama_proses))}}" id="label{{str_replace($replace,'', strtolower($st->nama_proses))}}" style="display: none">{{$st->nama_proses}}</label>
                                <input class="form-control" type="file" name="filestatus[]" id="{{str_replace($replace,'', strtolower($st->nama_proses))}}" multiple="multiple" data-role="button" data-inline="true" data-mini="true" data-corners="false" style="display: none">

                            @endforeach
                        </div>
                        <input type="hidden" value="{{$st->id}}" name="status">
                        <input type="hidden" value="{{$dataTypeContent->id}}" name="loi">
                        <div class="form-group col-lg-12">
                            <button class="btn btn-primary" name="btn" type="button" id="review" data-toggle="modal" data-target="#myModal">
                                <span>
                                    NEXT
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>

                        <div class="modal fade modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" style="color: red;font-weight: bold"><i class="voyager-warning"></i> <strong><i>Pastikan Isian Anda Benar</i></strong></h4>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-condensed">
                                            <tr>
                                                <td>
                                                    Nama Perusahaan
                                                </td>
                                                <td>=</td>
                                                <td id="p" style="color: red;font-size: 25px"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Bidang Usaha
                                                </td>
                                                <td>=</td>
                                                <td id="b" style="color: red;font-size: 25px"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Alamat Perusahaan
                                                </td>
                                                <td>=</td>
                                                <td id="a" style="color: red;font-size: 25px"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Nilai Investasi
                                                </td>
                                                <td>=</td>
                                                <td id="i" style="color: red;font-size: 25px"></td>
                                            </tr>

                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                                        <button class="btn btn-danger" value="submit" name="submit" type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>


    <!-- End Delete File Modal -->
@stop



@section('javascript')
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

    <script>
        var alarmInput = $('#status');
        alarmInput.on('change', function () {
            @foreach($status as $s)
                @php
                    $replace = array(" ", "/");
                @endphp
                var {{str_replace($replace,'', strtolower($s->nama_proses))}} = $('#{{str_replace($replace,'', strtolower($s->nama_proses))}}');
                var label{{str_replace($replace,'', strtolower($s->nama_proses))}} = $('#label{{str_replace($replace, '', strtolower($s->nama_proses))}}');
            @endforeach

            //this == alarmInput within this change handler
            switch ($(this).val()) {
                @foreach($status as $s)
                @php
                    $replace = array(" ", "/");
                @endphp
                case '{{$s->id}}':
                    {{str_replace($replace,'', strtolower($s->nama_proses))}}.show();
                    label{{str_replace($replace,'', strtolower($s->nama_proses))}}.show();
                    break;
                @endforeach
            }
        });
    </script>

    <script type="text/javascript">
        $('#review').click(function() {
            /* when the button in the form, display the entered values in the modal */
            $('#p').text($('#perusahaan').val());
            $('#b').text($('#bidang_usaha').val());
            $('#a').text($('#alamat').val());
            $cur = $( "#alarm_action").val();

            if ($cur == "rupiah"){
                $('#i').text("Rp "+$('#rp').val());
            }
            else {
                $('#i').text("USD $ "+$('#usd').val());
            }
            console.log($cur);
        });
    </script>
    <script>
        var params = {};
        var $file;

        function deleteHandler(tag, isMulti) {
            return function() {
                $file = $(this).siblings(tag);

                params = {
                    slug:   '{{ $dataType->slug }}',
                    filename:  $file.data('file-name'),
                    id:     $file.data('id'),
                    field:  $file.parent().data('field-name'),
                    multi: isMulti,
                    _token: '{{ csrf_token() }}'
                }

                $('.confirm_delete_name').text(params.filename);
                $('#confirm_delete_modal').modal('show');
            };
        }

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.type != 'date' || elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
            $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
            $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
            $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
            $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));

            $('#confirm_delete').on('click', function(){
                $.post('{{ route('voyager.media.remove') }}', params, function (response) {
                    if ( response
                        && response.data
                        && response.data.status
                        && response.data.status == 200 ) {

                        toastr.success(response.data.message);
                        $file.parent().fadeOut(300, function() { $(this).remove(); })
                    } else {
                        toastr.error("Error removing file.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@stop
