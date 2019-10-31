<?php

namespace App\Exports;

use App\CjibfInvestor;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class LoiNegara implements FromView, WithTitle
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $loi_country = DB::table('lois')
            ->join('profile_investors', 'profile_investors.nama_perusahaan' , '=', 'lois.nama_perusahaan')
            ->select( 'profile_investors.country as country', DB::raw("sum(lois.nilai_rp) as sumrp"))
            ->where('cjibf', '=', 1)
            ->groupBy('profile_investors.country')
            ->get();

        return view('cjibf.partials.loi-cjibf', compact('loi_country'));
    }

    public function title(): string
    {
        return 'Negara';
    }
}