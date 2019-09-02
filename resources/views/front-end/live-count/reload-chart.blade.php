<div id="autochart">
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
<script>
    Highcharts.chart('container', {

        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Data extracted from a HTML table in the page'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {

            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });

</script>
