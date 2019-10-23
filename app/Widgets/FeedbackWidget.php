<?php

namespace App\Widgets;

use App\Feedback;
use App\ProfileInvestor;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class FeedbackWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Feedback::all();
        $sum = Feedback::all()->sum('rate');

        $csat1 = ($sum/$count->count())*5;
        $cast = ($csat1/25)*100;
        //dd($cast);

        $string = trans_choice('User Satisfaction', $cast." %");

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-group',
            'title'  => "LoI CJIBF 2019",
            'text'   => $count->count()." Responden.",
            'button' => [
                'text' => $cast.' %',
                'link' => '',
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->hasRole(['admin', 'Promosi']);
    }
}
