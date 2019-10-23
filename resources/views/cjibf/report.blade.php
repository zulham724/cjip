<div class="row">
    <div class="col-md-6">
        <div class="card card-small mb-4">
            <div class="card-header">
                <h1>Berdasarkan Lokasi</h1>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                    <tr style="text-align: center !important;">
                        <th scope="col" class="border-0" style="text-align: center">#</th>
                        <th scope="col" class="border-0" style="text-align: center">Kabupaten/ Kota</th>
                        <th scope="col" class="border-0" style="text-align: center">Jumlah Investor Berminat</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(app('VoyagerAuth')->user()->hasRole('kab'))


                    @else
                        @foreach($user_info as $kab)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$kab->user->namakota[0]->nama}}</td>
                                <td>{{$kab->total}}</td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-small mb-4">
            <div class="card-header">
                <h1>Berdasarkan Sektor</h1>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                    <tr style="text-align: center !important;">
                        <th scope="col" class="border-0" style="text-align: center">#</th>
                        <th scope="col" class="border-0" style="text-align: center">Kabupaten/ Kota</th>
                        <th scope="col" class="border-0" style="text-align: center">Jumlah Investor Berminat</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(app('VoyagerAuth')->user()->hasRole('kab'))


                    @else
                        @foreach($sector_info as $sector)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$sector->sektor_interest}}</td>
                                <td>{{$sector->totalsektor}}</td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
