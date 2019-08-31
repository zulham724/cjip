
<!doctype html>
<html class="no-js h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shards Dashboard Lite - Free Bootstrap Admin Template – DesignRevision</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @php $title_logo = Voyager::setting('site.logo', ''); @endphp
    <link rel="icon" href="{{asset('storage/'.$title_logo)}}" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset('investor/shards-dashboards.1.1.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('investor/extras.1.1.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/front-end/live/dataTables.material.min.css')}}" >
    <link rel="stylesheet" href="{{asset('js/front-end/live/material.min.css')}}" ><link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>
<body class="h-100">
<div class="container-fluid">
    <div class="row">
        <!-- Main Sidebar -->

        <!-- End Main Sidebar -->
        <main class="main-content col-lg-12 col-md-12 col-sm-12 p-0">

            <!-- / .main-navbar -->
            <div class="main-content-container container-fluid px-4">
                <!-- Page Header -->
                <div class="page-header row no-gutters py-4">
                    <div class="col-12 col-sm-12 text-center ">
                        <h1 class="page-title">Total Rencana Nilai Investasi Jawa Tengah</h1>
                        <hr>
                        <h1 class="page-title">Total Rencana Nilai Investasi Jawa Tengah</h1>
                    </div>
                </div>
                <!-- End Page Header -->
                <!-- Small Stats Blocks -->
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

                                    <tr>
                                        <th>Manufacture</th>
                                        <td>{{$manufacture_rp}}</td>
                                        <td>{{$manufacture_usd}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tourism</th>
                                        <td>{{$tourism_rp}}</td>
                                        <td>{{$tourism_usd}}</td>
                                    </tr>
                                    <tr>
                                        <th>Infrastructure</th>
                                        <td>{{$infrastruktur_rp}}</td>
                                        <td>{{$infrastruktur_usd}}</td>
                                    </tr>
                                    <tr>
                                        <th>Agriculture</th>
                                        <td>{{$agriculture_rp}}</td>
                                        <td>{{$agriculture_usd}}</td>
                                    </tr>
                                    <tr>
                                        <th>Property</th>
                                        <td>{{$property_rp}}</td>
                                        <td>{{$property_usd}}</td>
                                    </tr>
                                    <tr>
                                        <th>Mining & Energy</th>
                                        <td>{{$mining_rp}}</td>
                                        <td>{{$mining_usd}}</td>
                                    </tr>
                                    <tr>
                                        <th>Others</th>
                                        <td>{{$others_rp}}</td>
                                        <td>{{$others_usd}}</td>
                                    </tr>

                                    </tbody>
                                </table>


                        </div>
                    </div>

                </div>
            </div>
            <footer class="main-footer d-flex p-2 px-3 bg-white border-top">

            <span class="copyright ml-auto my-auto mr-2">Central Java Investment Platform © 2019
              <a href="https://cjip.jatengprov.go.id" rel="nofollow">CJIP</a>
            </span>
            </footer>
        </main>
    </div>
</div>
<script src="{{asset('js/front-end/live/jquery-3.3.1.js')}}"></script>
<script src="{{asset('js/front-end/live/dataTables.material.min.js')}}"></script>
<script src="{{asset('js/front-end/live/jquery.dataTables.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            columnDefs: [
                {
                    targets: [ 0, 1, 2 ],
                    className: 'mdl-data-table__cell--non-numeric'
                }
            ]
        } );
    } );
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
<script src="{{asset('investor/js/extras.1.1.0.min.js')}}"></script>
<script src="{{asset('investor/js/shards-dashboards.1.1.0.min.js')}}"></script>
<script src="{{asset('investor/js/shards-dashboards.1.1.0.min.js')}}"></script>
<script src="{{asset('investor/js/app-blog-new-post.1.1.0.js')}}"></script>
<script src="{{asset('investor/js/app-components-overview.1.1.0.js')}}"></script>
<script src="{{asset('js/front-end/loading-js.js')}}"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
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
</body>
</html>