@extends('master-lo')

@section('page_title', __('voyager::generic.viewing').' '. 'LO CJIBF 2019')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-lighthouse"></i> LO CJIBF 2019
        </h1>
    </div>
@stop
@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">

                        <div class="table-responsive">
                            <h1 class="page-title">
                                Investor terdaftar
                            </h1>
                            <table id="dataTable" class="table table-hover">

                                <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama Perusahaan
                                    </th>
                                    <th>
                                        Sektor
                                    </th>
                                    <th>
                                        Kab/Kota
                                    </th>
                                    <th>
                                        Meja
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--@if(Auth::user()->hasRole('LO'))--}}
                                    @foreach($investor_daftar as $inv)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$inv->profil->nama_perusahaan}}</td>
                                            <td>{{$inv->sektor_interest}}</td>
                                            <td>{{$inv->userId->kabkota->nama}}</td>
                                            <td>{{$inv->meja_id}}</td>
                                        </tr>

                                    @endforeach
                                {{--@endif--}}
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">

                        <div class="table-responsive">
                            <h1 class="page-title">
                                LoI
                            </h1>
                            <table id="dataTable" class="table table-hover">

                                <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama Perusahaan
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Lokasi Investasi
                                    </th>
                                    <th>
                                        Nilai USD
                                    </th>
                                    <th>
                                        Nilai Rp
                                    </th>
                                    <th>
                                        Bidang Usaha
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--@if(Auth::user()->hasRole('LO'))--}}
                                    @foreach($investor as $invloi)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$invloi->profil->nama_perusahaan}}</td>
                                            <td>{{$invloi->loi->phone}}</td>
                                            <td>{{$invloi->loi->email}}</td>
                                            <td>{{$invloi->userId->kabkota->nama}}</td>
                                            <td>{{$invloi->loi->nilai_usd}}</td>
                                            <td>{{$invloi->loi->nilai_rp}}</td>
                                            <td>{{$invloi->loi->bidang_usaha}}</td>
                                        </tr>

                                    @endforeach
                                {{--@endif--}}
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')

        <link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">

@stop

@section('javascript')
    <!-- DataTables -->

        <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>

@stop
