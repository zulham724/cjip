<div id="auto">

    <!-- End Small Stats Blocks -->

        <!-- Users Stats -->

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
                                    <td>{{ number_format($loi->nilai_usd) }}</td>
                                    <td>{{ number_format($loi->nilai_rp) }}</td>
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

        <!-- End Users Stats -->
        <!-- Users By Device Stats -->


</div>
