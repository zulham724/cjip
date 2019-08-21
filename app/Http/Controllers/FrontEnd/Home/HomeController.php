<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Berita;
use App\Events\FeedAction;
use App\Feed;
use App\LoiInterest;
use App\Pariwisata;
use App\Perikanan;
use App\Perkebunan;
use App\Pertanian;
use App\Peternakan;
use App\ProfileInvestor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   public function home(){
       $mapsKey = 'AIzaSyBGsawbqVs083lGEe8cilVz0FqO0rHt5ZE&amp';
       $feeds = Feed::orderByViews()->paginate(8);
       $populers = Feed::orderByViews()->take(5)->get();
       $news = Berita::take(5)->get();


       if (Auth::guard('investor')->check()){
           $registered = ProfileInvestor::where('user_id',Auth::guard('investor')->user()->id)->first();
           $intersts = LoiInterest::where('user_id', Auth::guard('investor')->user()->id)->get();
           //dd($registered);
           if (is_null($registered)){
               return redirect()->route('form.profile', Auth::guard('investor')->user()->id );
           }
           elseif (isset($intersts)){
               return view('front-end.home', compact('mapsKey','feeds', 'intersts', 'populers', 'news'));
           }
           else{
               return view('front-end.home', compact('mapsKey','feeds',  'populers', 'news'));

           }
       }
       else{
           return view('front-end.home', compact(
               'mapsKey','feeds', 'populers', 'news'));
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
}
