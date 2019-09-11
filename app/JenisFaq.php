<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class JenisFaq extends Model
{
    use Translatable;
    protected $translatable = [
        'name',
    ];
    public $timestamps = false;
}
