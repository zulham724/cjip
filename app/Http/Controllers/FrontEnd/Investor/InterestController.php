<?php

namespace App\Http\Controllers\FrontEnd\Investor;

use App\Feed;
use App\KabKota;
use App\LoiInterest;
use App\ProfileInvestor;
use App\Sektor;
use App\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class InterestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:investor');
    }

    public function showInterestForm(){

        $perusahaan = ProfileInvestor::all()->first();
        $sektors = Sektor::all();
        $cities = KabKota::all();
        //dd($cities);
        foreach ($cities as $city){
            //dd($city->user->id);
        }
        $intersts = LoiInterest::all();
        $populers = Feed::orderByViews()->take(5)->get();
        $news = Berita::take(5)->get();

        return view('front-end.investor.interest-manual', compact('perusahaan', 'sektors', 'cities', 'intersts', 'populers', 'news'));
    }

    /**
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeInterest(Request $request){
        $this->validate($request, [
            'sektor' => 'required',
            'kab_kota' => 'required',
            'lokasi' => 'required',
        ]);

       // dd(Input::rew('kab_kota'));



        $user = Auth::guard('investor')->user()->id;
        $profil = ProfileInvestor::where('user_id', $user)->first();


        if ($request->filled('rp')){
            $rp = $request->input('rp');
            $storethis = (string)str_replace(',', '',$rp);
            /*dd($storethis);*/
        }
        else {
            $storethis = 0;
        }

        if ($request->has('usd')){
            $iki = $request->input('usd');
            $storethisusd = (string)str_replace(',', '',$iki);
            /*dd($storethis);*/
        }
        else {
            $storethisusd = 0;
        }

        /*$jml = Loi::with('nilai_investasi');*/

        $post = new LoiInterest();
        if ($storethisusd == 0) {
            $post->nilai_usd = 0;
            $post->nilai_rp = $storethis;
        }
        elseif ($storethis == 0) {
            $post->nilai_rp = 0;
            $post->nilai_usd = $storethisusd;
        }

        $post->user_id = $user;
        $post->profile_id = $profil->id;
        $post->sektor_id = $request->sektor;
        $post->kab_kota_id = $request->input('kab_kota');
        $post->lokasi_investasi = $request->input('lokasi');
        //dd($post);

        $post->save();


        return redirect()->route('homey2');
    }
}
