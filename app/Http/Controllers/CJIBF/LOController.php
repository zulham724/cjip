<?php

namespace App\Http\Controllers\CJIBF;

use App\CjibfInvestor;
use App\CjibfTable;
use App\Lois;
use App\SettingLo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LOController extends Controller
{

    public function lo(){
        return view('master-lo');
    }

    public function loSetting($id){

        $lo = SettingLo::with('meja')->where('user_lo', $id)->first();

<<<<<<< HEAD
        foreach ($lo->meja as $m){
            $meja = $m->kode_meja;
            //dd($meja);
                $investor_daftar = CjibfInvestor::where('meja_id', $meja)->get();

                $investor = CjibfInvestor::has('loi')->with('loi')->where('meja_id', $meja)->get();
                //dump(isset($investor->loi));
                foreach ($investor as $inv){
                    //dd($inv->loi);
                }

            return view('cjibf.lo2019', compact('investor', 'investor_daftar'));

        }

=======
        //dd($lo->meja[1]->kode_meja);

            $investor_daftar = CjibfInvestor::where('meja_id', $lo->meja[0]->kode_meja)->orWhere('meja_id', $lo->meja[1]->kode_meja)->get();
            //dd($investor_daftar);

            $investor = CjibfInvestor::has('loi')->with('loi')->where('meja_id', $lo->meja[0]->kode_meja)->orWhere('meja_id', $lo->meja[1]->kode_meja)->get();


            return view('cjibf.lo2019', compact('investor', 'investor_daftar'));
>>>>>>> 5bdb1b243385406d3dcd000dde6fffc3c509f179

    }
}
