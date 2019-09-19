<?php

namespace App\Http\Controllers\FrontEnd\Home;

use App\CjibfCp;
use App\CjibfEvent;
use App\DisplaySector;
use App\TalkshowSpeaker;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Facades\Voyager;

class EventController extends Controller
{
    public function event(){

        $setting = CjibfEvent::first();
        $sectors = DisplaySector::all();
        $talkshows = TalkshowSpeaker::all();
        $cps = CjibfCp::all();

        SEOTools::setTitle($setting->nama_kegiatan);
        SEOTools::setDescription($setting->keterangan);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@DPMPTSPJateng');
        SEOTools::jsonLd()->addImage(Voyager::image($setting->logo));

        return view('front-end.event.event', compact('setting', 'sectors', 'talkshows', 'cps'));
    }
}
