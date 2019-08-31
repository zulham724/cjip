<?php

namespace App\Http\Controllers\CJIBF;

use App\CjibfInvestor;
use App\CjibfSektor;
use App\Lois;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LiveController extends Controller
{
    public function live(){

        $lois = Lois::where('cjibf', 1)->orderBy('created_at', 'desc')->get();


        $loi_sectors = Lois::with(['sektor' => function($q){
            $q->groupBy('sektor_interest');
        }])->where('cjibf', 1)->get();
        //dd($loi_sectors->toJson());
        $sektors = CjibfSektor::all();
        /*$sektors = CjibfInvestor::groupBy(['sektor_interest', 'loi_id'])->get();*/
        //dd($sektors);
        if (isset($lois)){
            $rp = Lois::where('cjibf', 1)->sum('nilai_rp');
            //dd($rp);
            $usd = Lois::where('cjibf', 1)->sum('nilai_usd');

            $manufacture_rp = Lois::where('bidang_usaha', 'Manufacture')->where('cjibf', 1)->sum('nilai_rp');
            $manufacture_usd = Lois::where('bidang_usaha', 'Manufacture')->where('cjibf', 1)->sum('nilai_usd');
            //dd($manufacture_usd);
            $tourism_rp = Lois::where('bidang_usaha', 'Tourism')->where('cjibf', 1)->sum('nilai_rp');
            $tourism_usd = Lois::where('bidang_usaha', 'Tourism')->where('cjibf', 1)->sum('nilai_usd');

            $infrastruktur_rp = Lois::where('bidang_usaha', 'Infrastructure')->where('cjibf', 1)->sum('nilai_rp');
            $infrastruktur_usd = Lois::where('bidang_usaha', 'Infrastructure')->where('cjibf', 1)->sum('nilai_usd');

            $agriculture_rp = Lois::where('bidang_usaha', 'Agriculture')->where('cjibf', 1)->sum('nilai_rp');
            $agriculture_usd = Lois::where('bidang_usaha', 'Agriculture')->where('cjibf', 1)->sum('nilai_usd');

            $property_rp = Lois::where('bidang_usaha', 'Property')->where('cjibf', 1)->sum('nilai_rp');
            $property_usd = Lois::where('bidang_usaha', 'Property')->where('cjibf', 1)->sum('nilai_usd');

            $mining_rp = Lois::where('bidang_usaha', 'Mining & Energy')->where('cjibf', 1)->sum('nilai_rp');
            $mining_usd = Lois::where('bidang_usaha', 'Mining & Energy')->where('cjibf', 1)->sum('nilai_usd');
            //dd($mining_rp);
            $others_rp = Lois::where('bidang_usaha', 'Others')->where('cjibf', 1)->sum('nilai_rp');
            $others_usd = Lois::where('bidang_usaha', 'Others')->where('cjibf', 1)->sum('nilai_usd');
        }
        else{
            $rp = "0";
            $usd = "0";

        }


        /*//dd($lois);
        foreach ($lois as $loi){
            //dd($loi->sektor->sektor_interest);
        }*/
        return view('front-end.live-count.live-count', compact('lois', 'rp', 'usd', 'sektors',
            'manufacture_rp',
            'manufacture_usd',
            'tourism_rp',
            'tourism_usd',
            'infrastruktur_rp',
            'infrastruktur_usd',
            'agriculture_rp',
            'agriculture_usd',
            'property_rp',
            'property_usd',
            'mining_rp',
            'mining_usd',
            'others_rp',
            'others_usd'
            ));
    }
}
