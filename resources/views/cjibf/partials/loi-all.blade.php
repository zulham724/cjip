<table id="example" class="mdl-data-table" style="width:100%">
    <thead>
    <tr>
        <th>No</th>
        <th>Company</th>
        <th>Negara</th>
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
                <td>
                    @isset($loi->asal_negara)
                    {{$loi->asal_negara}}
                        @else
                    -
                    @endisset
                </td>

                <td>@isset($loi->sektor){{ $loi->sektor->sektor_interest }} @else - @endisset</td>


                <td>@isset($loi->kota){{ $loi->kota[0]->nama }} @else - @endisset</td>
                <td>USD $ {{ number_format($loi->nilai_usd) }}</td>
                <td>Rp. {{ number_format($loi->nilai_rp) }}</td>
            </tr>
        @endforeach
    @endisset
    </tbody>
</table>