<?php

namespace App\Http\Controllers\FrontEnd\News;

use App\Berita;
use App\Feed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function news(){
            $news = Berita::where('status', 1)->get();

            return view('front-end.content.berita.news', compact('news'));
    }

    public function test(Request $request){
        dd($request->has('test_Checkbox'));
    }

    public function readBerita($id){
        $news = Berita::findOrFail($id);
        $newss = Berita::all();
        $feed = Feed::where('feed_id', $id)->where('model_name', 'beritas')->first();

        views($news)->record();

        return view('front-end.content.berita.detail.news', compact('news'));
    }
}
