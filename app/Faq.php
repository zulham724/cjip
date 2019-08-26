<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Faq extends Model
{
    public $timestamps = false;

    public function jenis(){
        return $this->belongsTo(JenisFaq::class, 'jenis_faq');
    }
}
