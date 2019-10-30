<?php

namespace App\Http\Controllers\CJIBF;

use App\CjibfInvestor;
use App\Exports\ExportProject;
use App\Exports\ExportProjectKabkota;
use App\Exports\ExportProjectSector;
use App\Exports\ExportRekapLokasi;
use App\Exports\ExportRekapNegara;
use App\Exports\ExportRekapPendaftar;
use App\Exports\ExportRekapSektor;
use App\Lois;
use App\ProfileInvestor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class RekapPendaftarController extends Controller
{
    public function cetakRekap(){

        return Excel::download(new ExportRekapPendaftar, 'rekap-peserta-cjibf-2019.xlsx');
    }
    public function cetakLokasi(){

        return Excel::download(new ExportRekapLokasi(), 'rekap-cjibf-by-locations-2019.xlsx');
    }
    public function cetakSektor(){

        return Excel::download(new ExportRekapSektor(), 'rekap-cjibf-by-sectors-2019.xlsx');
    }
    public function cetakNegara(){

        return Excel::download(new ExportRekapNegara(), 'rekap-cjibf-by-country-2019.xlsx');
    }

    public function rekapProject(){
        return Excel::download(new ExportProject(), 'rekap-cjibf-by-country-2019.xlsx');

    }
    public function rekapProjectSector(){
        return Excel::download(new ExportProjectSector(), 'rekap-cjibf-by-country-2019.xlsx');

    }
    public function rekapProjectKabkota(){
        return Excel::download(new ExportProjectKabkota(), 'rekap-cjibf-by-country-2019.xlsx');

    }

    public function rekapLoI(){
        $lois = Lois::with('loi')->where('cjibf', 1)->orderBy('created_at', 'desc')->get();
        //dd($lois);


        Excel::create('Rekap LoI CJIBF 2019', function($excel) {


            $excel->sheet('NEGARA', function($sheet) {
                $loi_country = DB::table('lois')
                    ->join('profile_investors', 'profile_investors.nama_perusahaan' , '=', 'lois.nama_perusahaan')
                    ->select( 'profile_investors.country as country', DB::raw("sum(lois.nilai_rp) as sumrp"))
                    ->where('cjibf', '=', 1)
                    ->groupBy('profile_investors.country')
                    ->get();
                $sheet->loadView('cjibf.partials.loi-cjibf', compact('loi_country'));
            });

            $excel->sheet('Second sheet', function($sheet) {

                $sheet->loadView('view_second');
            });

        });

    }
}
