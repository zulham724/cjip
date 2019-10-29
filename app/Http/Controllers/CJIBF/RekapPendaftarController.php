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
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
}
