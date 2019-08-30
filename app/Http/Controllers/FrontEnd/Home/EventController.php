<?php

namespace App\Http\Controllers\FrontEnd\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function event(){

        return view('front-end.event.event');
    }
}
