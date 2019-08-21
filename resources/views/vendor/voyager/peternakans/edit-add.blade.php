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
                    <form role="form"
                            class="form-edit-add"
                            action="{{ $edit ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) : route('voyager.'.$dataType->slug.'.store') }}"
                            method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if($edit)
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Adding / Editing -->
                            @php
                                $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                            @endphp
                                <div class="form-group col-lg-12" >
                                    <label class="control-label">Jenis Komoditas</label>
                                    <select class="form-control select2 select2-hidden-accessible" name="komoditas_id" tabindex="-1" aria-hidden="true" @if($edit) value="{{$peternakan->potensiId->jenis_komoditas}}" @endif>
                                        @foreach($komoditas as $k)
                                            <option value="{{$k->id}}">{{$k->jenis_komoditas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-lg-6" >
                                    <label class="control-label">Tahun</label>
                                    <input required type="text" class="form-control" name="tahun" placeholder="Tahun" @if($edit) value="{{$peternakan->tahun}}" @endif>
                                </div>
                                <div class="form-group col-lg-6" >
                                    <label class="control-label">Sumber Data</label>
                                    <input required type="text" class="form-control" name="sumber_data" placeholder="Sumber Data" @if($edit) value="{{$peternakan->sumber_data}}" @endif>
                                </div>

                                <div class="form-group col-lg-6" >
                                    <label class="control-label">Kebutuhan Konsumsi</label>
                                    <input required type="text" class="form-control" name="kebutuhan_konsumsi" placeholder="Kebutuhan Konsumsi"
                                           @if($edit)
                                           @php
                                               $luas = json_decode($peternakan->kebutuhan_konsumsi, true);
                                           @endphp
                                           value="{{$luas['kebutuhan_konsumsi']}}"
                                            @endif>
                                </div>
                                <div class="form-group col-lg-6" >
                                    <label class="control-label">Satuan</label>
                                    <select class="form-control select2 select2-hidden-accessible" name="satuan_luas" tabindex="-1" aria-hidden="true"
                                            @if($edit)
                                            @php
                                                $luas = json_decode($peternakan->luas_tanah, true);
                                            @endphp
                                            value="{{$luas['satuan']}}"
                                        @endif
                                    >
                                        @foreach($satuan as $k)
                                            <option value="{{$k->satuan}}">{{$k->satuan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-lg-6" >
                                    <label class="control-label">Jumlah Produksi</label>
                                    <input required type="text" class="form-control" name="jml_produksi" placeholder="Jumlah Produksi"
                                           @if($edit)
                                           @php
                                               $jml = json_decode($peternakan->jml_produksi, true);
                                           @endphp
                                           value="{{$jml['jml_produksi']}}"
                                        @endif
                                    >
                                </div>
                                <div class="form-group col-lg-6" >
                                    <label class="control-label">Satuan</label>
                                    <select class="form-control select2 select2-hidden-accessible" name="satuan_jml_produksi" tabindex="-1" aria-hidden="true"
                                            @if($edit)
                                            @php
                                                $jml = json_decode($peternakan->jml_produksi, true);
                                            @endphp
                                            value="{{$jml['satuan']}}"
                                        @endif
                                    >
                                        @foreach($satuan as $k)
                                            <option value="{{$k->satuan}}">{{$k->satuan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-lg-6" >
                                    <label class="control-label">Jumlah Populasi</label>
                                    <input required type="text" class="form-control" name="jml_populasi" placeholder="Jumlah Populasi"
                                           @if($edit)
                                           @php
                                               $prod = json_decode($peternakan->jml_populasi, true);
                                           @endphp
                                           value="{{$prod['jml_populasi']}}"
                                        @endif
                                    >
                                </div>
                                <div class="form-group col-lg-6" >
                                    <label class="control-label">Satuan</label>
                                    <select class="form-control select2 select2-hidden-accessible" name="satuan_produktifitas" tabindex="-1" aria-hidden="true"
                                            @if($edit)
                                            @php
                                                $prod = json_decode($peternakan->jml_populasi, true);
                                            @endphp
                                            value="{{$prod['satuan']}}"
                                        @endif
                                    >
                                        @foreach($satuan as $k)
                                            <option value="{{$k->satuan}}">{{$k->satuan}}</option>
                                        @endforeach
                                    </select>
                                </div>


                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                        </div>
                    </form>

                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                            enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                                 onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
@stop

@section('javascript')
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
