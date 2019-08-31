<div id="auto">
    <div class="row">
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Rupiah</span>
                            <h6 class="stats-small__value count my-3">Rp. {{number_format($rp)}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Dollar US</span>
                            <h6 class="stats-small__value count my-3">US$ {{number_format($usd)}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Small Stats Blocks -->
    <div class="row">
        <!-- Users Stats -->
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="card card-small">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Letter of Intent</h6>
                </div>
                <div class="card-body pt-0">

                    <table id="example" class="mdl-data-table" style="width:100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Company</th>
                            <th>Sector</th>
                            <th>Lokasi</th>
                            <th>USD</th>
                            <th>RP</th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($lois)
                            @foreach($lois as $loi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $loi->nama_perusahaan }}</td>
                                    <td>{{ $loi->sektor->sektor_interest }}</td>
                                    <td>{{ $loi->kota->kabkota->nama }}</td>
                                    <td>{{ $loi->nilai_usd }}</td>
                                    <td>{{ $loi->nilai_rp }}</td>
                                </tr>
                            @endforeach
                        @endisset
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Company</th>
                            <th>Sector</th>
                            <th>Lokasi</th>
                            <th>USD</th>
                            <th>RP</th>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
        <!-- End Users Stats -->
        <!-- Users By Device Stats -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card card-small h-100">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Top 5 Sectors</h6>
                </div>
                <div id="container" style="width: 100%"></div>

                <table id="datatable" hidden>
                    <thead>
                    <tr>
                        <th>Sectors</th>
                        <th>Rp</th>
                        <th>USD</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($graphics as $graphic)
                        <tr>
                            <th>{{$graphic->bidang_usaha}}</th>
                            <td>{{$graphic->sumrp}}</td>
                            <td>{{$graphic->sumusd}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>


            </div>
        </div>

    </div>
</div>
