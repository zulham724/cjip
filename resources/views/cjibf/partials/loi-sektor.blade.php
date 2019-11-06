<table id="datatable" hidden>
    <thead>
    <tr>
        <th>Sectors</th>
        <th>Rp</th>
        <th>USD</th>
    </tr>
    </thead>
    <tbody>
    @isset($graphics)
    @foreach($graphics as $graphic)
        <tr>
            <th>@isset($graphic->sektor){{ $graphic->sektor->sektor_interest }} @else Others @endisset</th>
            <td>{{$graphic->sumrp}}</td>
            <td>{{$graphic->sumusd}}</td>
        </tr>
    @endforeach
    @endisset
    </tbody>
</table>