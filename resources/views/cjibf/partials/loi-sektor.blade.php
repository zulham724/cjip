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
            <td>Rp. {{number_format($graphic->sumrp)}}</td>
            <td>USD $ {{number_format($graphic->sumusd)}}</td>
        </tr>
    @endforeach
    @endisset
    </tbody>
</table>