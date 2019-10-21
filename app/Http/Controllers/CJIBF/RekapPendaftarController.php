<?php

namespace App\Http\Controllers\CJIBF;

use App\CjibfInvestor;
use App\Exports\ExportRekapPendaftar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class RekapPendaftarController extends Controller
{
    public function cetakRekap(){

        return Excel::download(new ExportRekapPendaftar, 'rekap-peserta-cjibf-2019.xlsx');
    }
}
