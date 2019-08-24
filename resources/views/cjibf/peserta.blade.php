<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header">
                <a href="{{route('loi.manual')}}">
                    <button class="btn btn-info block-6">Isi Manual</button>
                </a>
                <a href="{{route('cetak.daftar-hadir')}}">
                    <button class="btn btn-info block-6">Cetak Daftar Hadir</button>
                </a>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                    <tr style="text-align: center !important;">
                        <th scope="col" class="border-0" style="text-align: center">#</th>
                        <th scope="col" class="border-0" style="text-align: center">Nama Perusahaan</th>
                        <th scope="col" class="border-0" style="text-align: center">Kab/Kota</th>
                        <th scope="col" class="border-0" style="text-align: center">Sektor</th>
                        <th scope="col" class="border-0" style="text-align: center">Meja</th>
                        <th scope="col" class="border-0" style="text-align: center">Nilai Investasi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(app('VoyagerAuth')->user()->hasRole('kab'))
                        @foreach($pesertakabs as $pesertakab)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$pesertakab->profil->nama_perusahaan}}, {{$pesertakab->profil->badan_hukum}}</td>
                                <td>{{$pesertakab->userId->admin->name}}</td>
                                <td>{{$pesertakab->sektor_interest}}</td>
                                <td>{{$pesertakab->meja_id}}</td>
                                <td>
                                    @if(is_null($pesertakab->loi_id))
                                        <a href="{{route('loi.cjibf', [$pesertakab->profile_id, $pesertakab->id])}}">
                                            <button class="btn btn-warning">Isi</button>
                                        </a>
                                    @else
                                        @if(is_null($pesertakab->loi->nilai_usd))
                                            Rp. {{$pesertakab->loi->nilai_rp}}
                                        @else
                                            USD {{$pesertakab->loi->nilai_usd}}
                                        @endif

                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        @foreach($pesertas as $peserta)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$peserta->profil->nama_perusahaan}}, {{$peserta->profil->badan_hukum}}</td>
                                <td>{{$peserta->userId->admin->name}}</td>
                                <td>{{$peserta->sektor_interest}}</td>
                                <td>{{$peserta->meja_id}}</td>
                                <td>
                                    @if(is_null($peserta->loi_id))
                                        <a href="{{route('loi.cjibf', [$peserta->profile_id, $peserta->id])}}">
                                            <button class="btn btn-warning">Isi</button>
                                        </a>
                                    @else
                                        @if($peserta->loi->nilai_usd == 0)
                                            Rp. {{$peserta->loi->nilai_rp}}
                                        @else
                                            USD {{$peserta->loi->nilai_usd}}
                                        @endif

                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                    {{$pesertas->links()}}
                </table>
            </div>
        </div>
    </div>
</div>
