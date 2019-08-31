<?php

namespace App\Http\Controllers\FrontEnd\Home;

use App\CjibfCp;
use App\CjibfEvent;
use App\DisplaySector;
use App\TalkshowSpeaker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function event(){
        $setting = CjibfEvent::first();
        $sectors = DisplaySector::all();
        $talkshow = TalkshowSpeaker::all();
        $cps = CjibfCp::all();


        return view('front-end.event.event', compact('setting', 'sectors', 'talkshow', 'cps'));
    }
}
