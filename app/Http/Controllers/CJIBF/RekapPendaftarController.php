<?php

namespace App\Http\Controllers\CJIBF;

use App\CjibfInvestor;
use App\Exports\ExportLoiCjibf;
use App\Exports\ExportProject;
use App\Exports\ExportProjectKabkota;
use App\Exports\ExportProjectSector;
use App\Exports\ExportRekapLokasi;
use App\Exports\ExportRekapNegara;
use App\Exports\ExportRekapPendaftar;
use App\Exports\ExportRekapSektor;
use App\Lois;
use App\ProfileInvestor;
use App\Widgets\Loi;
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



        //dd($graphics);

        //dd($loi_country);

        return Excel::download(new ExportLoiCjibf(), 'rekap-loi-cjibf-by-country-2019.xlsx');


    }
}
