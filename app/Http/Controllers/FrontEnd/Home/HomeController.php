<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Award;
use App\Berita;
use App\BiayaAir;
use App\BiayaListrik;
use App\Events\FeedAction;
use App\Faq;
use App\Feed;
use App\InfrastrukturPendukung;
use App\JenisFaq;
use App\LoiInterest;
use App\Pariwisata;
use App\Perikanan;
use App\Perkebunan;
use App\Pertanian;
use App\PertumbuhanEkonomi;
use App\Peternakan;
use App\ProfileInvestor;
use App\Proyek;
use App\Umr;
use App\User;
use App\UserInvestor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function home(){
       $mapsKey = 'AIzaSyBGsawbqVs083lGEe8cilVz0FqO0rHt5ZE&amp';
       $feeds = Feed::orderByViews()->paginate(8);
       $populers = Feed::orderByViews()->take(5)->get();
       $news = Berita::take(5)->get();

       $ekonomis = PertumbuhanEkonomi::where('status', 1)->get();
       $awards = Award::all();
       $infrastrukturs = InfrastrukturPendukung::all();
       $umks = Umr::all()->groupBy(['kab_kota_id', 'tahun']);
       $user = User::all();
       //dd($user);
       //dd($umks->toJson());
       foreach ($umks as $key1 => $umk){
           //dd($key1);
           //dd(count($umk));
           $kota = User::where('id', $key1)->first();
           //dd($kota->kota->kabkota->nama);
            //dd($umk);
       }
       $listriks = BiayaListrik::all();
       $airs = BiayaAir::all();


       if (Auth::guard('investor')->check()){
           $registered = ProfileInvestor::where('user_id',Auth::guard('investor')->user()->id)->first();
           $intersts = LoiInterest::where('user_id', Auth::guard('investor')->user()->id)->get();
           //dd($registered);
           if (is_null($registered)){
               return redirect()->route('form.profile', Auth::guard('investor')->user()->id );
           }
           elseif (isset($intersts)){
               return view('front-end.new-home', compact('mapsKey','feeds', 'intersts', 'populers', 'news' , 'ekonomis', 'awards', 'infrastrukturs', 'umks', 'listriks', 'airs', 'user'));
           }
           else{
               return view('front-end.new-home', compact('mapsKey','feeds',  'populers', 'news' , 'ekonomis', 'awards', 'infrastrukturs', 'umks', 'listriks', 'airs', 'user'));

           }
       }
       else{
           return view('front-end.new-home', compact(
               'mapsKey','feeds', 'populers', 'news', 'ekonomis', 'awards', 'infrastrukturs', 'umks', 'listriks', 'airs', 'user'));
       }


   }


    public function likes(Request $request, $id)
    {
        $action = $request->get('action');
        switch ($action) {
            case 'Like':
                Feed::where('id', $id)->increment('likes_count');
                break;
            case 'Unlike':
                Feed::where('id', $id)->decrement('likes_count');
                break;
        }
        event(new FeedAction($id, $action));
        return '';
    }

    public function sidebar(){
       $intersts = LoiInterest::all();
       $populers = Feed::orderByViews()->take(5)->get();
       $news = Berita::take(5)->get();

       return view('front-end.sidebar', compact('intersts', 'populers', 'news'));
    }

    public function readyToOffer(){
        $proyeks = Proyek::whereHas('marketplace', function ($query) {
            $query->where('name', '=', 'Ready to Offer');
        })->where('status', 1)->paginate(5);
        //dd($proyeks);



        return view('front-end.marketplace.ready-to-offer', compact('proyeks'));
       //$proyeks = Proyek::with('marketplace');
    }
    public function prospectiveProject(){
        $proyeks = Proyek::whereHas('marketplace', function ($query) {
            $query->where('name', '=', 'Prospective Project');
        })->where('status', 1)->paginate(5);
        //dd($proyeks);
       //$proyeks = Proyek::with('marketplace');
        return view('front-end.marketplace.prospective', compact('proyeks'));
    }
    public function potentialProject(){
        $proyeks = Proyek::whereHas('marketplace', function ($query) {
            $query->where('name', '=', 'Potential Project');
        })->paginate(5);
        //dd($proyeks);
       //$proyeks = Proyek::with('marketplace');
        return view('front-end.marketplace.potentials', compact('proyeks'));
    }
    public function faq(){
        $faqs = Faq::all();
        $jns_faq = JenisFaq::all();
        //dd($proyeks);
       //$proyeks = Proyek::with('marketplace');
        return view('front-end.faq', compact('faqs', 'jns_faq'));
    }

    public function checkEmail(Request $request){
        if($request->get('email'))
        {
            $email = $request->get('email');
            $data = DB::table("user_investors")
                ->where('email', $email)
                ->count();
            if($data > 0)
            {
                echo 'not_unique';
            }
            else
            {
                echo 'unique';
            }
        }
    }
}
