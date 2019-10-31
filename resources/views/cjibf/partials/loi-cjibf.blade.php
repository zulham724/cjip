<table class="table mb-0">
    <thead class="bg-light">
    <tr style="text-align: center !important;">
        <th scope="col" class="border-0" style="text-align: center">#</th>
        <th scope="col" class="border-0" style="text-align: center">Negara</th>
        <th scope="col" class="border-0" style="text-align: center">Total Rencana Investasi</th>
    </tr>
    </thead>
    <tbody>
    @isset($loi_country)
        @foreach($loi_country as $loi)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$loi->country}}</td>
                <td>
                    @if($loi->sumrp)
                        Rp. {{number_format($loi->sumrp)}}
                        @else
                        USD $ {{number_format($loi->sumusd)}}
                    @endif
                </td>
            </tr>
        @endforeach
    @endisset

    </tbody>
</table>