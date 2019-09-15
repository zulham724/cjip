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
use App\JenisKatUserAir;
use App\LoiInterest;
use App\Pariwisata;
use App\Perikanan;
use App\Perkebunan;
use App\Pertanian;
use App\PertumbuhanEkonomi;
use App\Peternakan;
use App\ProfileInvestor;
use App\ProfilKabupaten;
use App\Proyek;
use App\Umr;
use App\User;
use App\UserInvestor;
use Artesaos\SEOTools\Facades\SEOTools;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Debug\Tests\testHeader;
use TCG\Voyager\Facades\Voyager;

class HomeController extends Controller
{
    public function home(){

        SEOTools::setTitle('Home');
        SEOTools::setDescription(Voyager::setting('site.description'));
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@DPMPTSPJateng');
        SEOTools::jsonLd()->addImage('https://cjip.jatengprov.go.id/storage/settings/August2019/esr0C8HmQss78AAnlaue.png');


        $test = Proyek::with('translations')->get();


        $mapsKey = 'AIzaSyBGsawbqVs083lGEe8cilVz0FqO0rHt5ZE&amp';
        $feeds = Feed::orderByViews()->paginate(8);
        $populers = Feed::orderByViews()->take(5)->get();
        $news = Berita::take(5)->get();

        $ekonomis = PertumbuhanEkonomi::where('status', 1)->get();
        $awards = Award::all();
        $infrastrukturs = InfrastrukturPendukung::all();
        $umks = Umr::all()->groupBy(['kab_kota_id', 'tahun']);
        $min = Umr::min('nilai_umr');
        $max = Umr::max('nilai_umr');
        $min_umk = Umr::where('nilai_umr', $min)->first();
        $max_umk = Umr::where('nilai_umr', $max)->first();
        //dd($min_umk->kab->kota->kabkota->nama);


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
        $airs = JenisKatUserAir::all();
        $alphabet = range('A', 'Z');

       $ch = curl_init();
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch, CURLOPT_URL, 'http://sijablayv2.dpmptsp.jatengprov.go.id/api/realisasi');
       $result = curl_exec($ch);
       curl_close($ch);
       $obj = json_decode($result);
       //dd(json_encode($obj));


       if (Auth::guard('investor')->check()){
           $registered = ProfileInvestor::where('user_id',Auth::guard('investor')->user()->id)->first();
           $intersts = LoiInterest::where('user_id', Auth::guard('investor')->user()->id)->get();
           //dd($registered);
           if (is_null($registered)){
               return redirect()->route('form.profile', Auth::guard('investor')->user()->id );
           }
           elseif (isset($intersts)){
               return view('front-end.new-home', compact('mapsKey', 'min_umk','max_umk','alphabet','obj','feeds', 'intersts', 'populers', 'news' , 'ekonomis', 'awards', 'infrastrukturs', 'umks', 'listriks', 'airs', 'user'));
           }
           else{
               return view('front-end.new-home', compact('mapsKey', 'min_umk','max_umk','alphabet','feeds','obj',  'populers', 'news' , 'ekonomis', 'awards', 'infrastrukturs', 'umks', 'listriks', 'airs', 'user'));

           }
       }
       else{
           return view('front-end.new-home', compact(
               'mapsKey', 'min_umk','max_umk','feeds', 'populers', 'news', 'ekonomis', 'awards','alphabet','obj', 'infrastrukturs', 'umks', 'listriks', 'airs', 'user'));
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
        SEOTools::setTitle('Ready to Offered');
        SEOTools::setDescription('Here is some ready to offered investment project - '.Voyager::setting('site.description'));
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@DPMPTSPJateng');
        SEOTools::jsonLd()->addImage('https://cjip.jatengprov.go.id/storage/settings/August2019/esr0C8HmQss78AAnlaue.png');

        $proyeks = Proyek::whereHas('marketplace', function ($query) {
            $query->where('name', '=', 'Ready to Offer');
        })->where('status', 1)->paginate(5);
        dd($proyeks);
        //dd($proyeks->load('translations'));
        if (($isModelTranslatable = is_bread_translatable($proyeks))) {
            $proyeks->load('translations');
        }

        return view('front-end.marketplace.ready-to-offer', compact('proyeks', 'isModelTranslatable'));
        //$proyeks = Proyek::with('marketplace');
    }

    public function detailRto($id, $slug){

        $proyek = Proyek::findOrFail($id);
        $mapsKey = 'AIzaSyBGsawbqVs083lGEe8cilVz0FqO0rHt5ZE&amp';
       /* $proyek*/
        SEOTools::setTitle('Ready to Offered -'.$proyek->project_name.' - '.$proyek->translate('en')->project_name);
        SEOTools::setDescription('Here is some ready to offered investment project - '.$proyek->latar_belakang.' - '.$proyek->translate('en')->latar_belakang);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@DPMPTSPJateng');
        SEOTools::jsonLd()->addImage('https://cjip.jatengprov.go.id/storage/settings/August2019/esr0C8HmQss78AAnlaue.png');

        return view('front-end.marketplace.detail.rto', compact('proyek', 'mapsKey'));

    }

    public function prospectiveProject(){
        SEOTools::setTitle('Prospective Projects');
        SEOTools::setDescription('Here is some prospective investment project - '.Voyager::setting('site.description'));
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@DPMPTSPJateng');
        SEOTools::jsonLd()->addImage('https://cjip.jatengprov.go.id/storage/settings/August2019/esr0C8HmQss78AAnlaue.png');


        $proyeks = Proyek::whereHas('marketplace', function ($query) {

            $query->where('name', '=', 'Prospective Project');
        })->where('status', 1)->paginate(5);
        //dd($proyeks);
        //$proyeks = Proyek::with('marketplace');
        return view('front-end.marketplace.prospective', compact('proyeks'));
    }

    public function detailPros($id, $slug){
        $proyek = Proyek::findOrFail($id);

        $mapsKey = 'AIzaSyBGsawbqVs083lGEe8cilVz0FqO0rHt5ZE&amp';
        SEOTools::setTitle('Prospective Projects -'.$proyek->project_name.' - '.$proyek->translate('en')->project_name);
        SEOTools::setDescription('Here is some prospective investment projects - '.$proyek->latar_belakang.' - '.$proyek->translate('en')->latar_belakang);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@DPMPTSPJateng');
        SEOTools::jsonLd()->addImage('https://cjip.jatengprov.go.id/storage/settings/August2019/esr0C8HmQss78AAnlaue.png');

        return view('front-end.marketplace.detail.pros', compact('proyek', 'mapsKey'));
    }

    public function potentialProject(){
        SEOTools::setTitle('Potential Projects');
        SEOTools::setDescription('Here is some potential investment projects investment project - '.Voyager::setting('site.description'));
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@DPMPTSPJateng');
        SEOTools::jsonLd()->addImage('https://cjip.jatengprov.go.id/storage/settings/August2019/esr0C8HmQss78AAnlaue.png');


        $proyeks = Proyek::whereHas('marketplace', function ($query) {
            $query->where('name', '=', 'Potential Project');
        })->paginate(5);
        //dd($proyeks);
        //$proyeks = Proyek::with('marketplace');
        return view('front-end.marketplace.potentials', compact('proyeks'));
    }

    public function detailPot($id, $slug){
        $proyek = Proyek::findOrFail($id);
        $mapsKey = 'AIzaSyBGsawbqVs083lGEe8cilVz0FqO0rHt5ZE&amp';
        SEOTools::setTitle('Potential Projects -'.$proyek->project_name.' - '.$proyek->translate('en')->project_name);
        SEOTools::setDescription('Here is some potential investment project - '.$proyek->latar_belakang.' - '.$proyek->translate('en')->latar_belakang);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@DPMPTSPJateng');
        SEOTools::jsonLd()->addImage('https://cjip.jatengprov.go.id/storage/settings/August2019/esr0C8HmQss78AAnlaue.png');

        return view('front-end.marketplace.detail.pot', compact('proyek', 'mapsKey'));
    }

    public function detailProfil($id){
        $profil = ProfilKabupaten::findOrFail($id);

        SEOTools::setTitle($profil->profil.' - '.$profil->translate('en')->profil);
        SEOTools::setDescription('Here is some ready to offered investment project - '.$profil->profil.' - '.$profil->translate('en')->profil);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@DPMPTSPJateng');
        SEOTools::jsonLd()->addImage('https://cjip.jatengprov.go.id/storage/settings/August2019/esr0C8HmQss78AAnlaue.png');

        return view('front-end.marketplace.detail.profil', compact('profil'));
    }

    public function faq(){
        SEOTools::setTitle('FAQ');
        SEOTools::setDescription('Frequently Asked Question about investment in Central Java - Pertanyaan yang sering muncul ketika Anda ingin berinvestasi di Provinsi Jawa Tengah');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@DPMPTSPJateng');
        SEOTools::jsonLd()->addImage('https://cjip.jatengprov.go.id/storage/settings/August2019/esr0C8HmQss78AAnlaue.png');

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
