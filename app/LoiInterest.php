<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoiInterest extends Model
{
    protected $connection = 'mysql';

    protected $table = 'loi_interests';

    public function kota(){
        return $this->belongsTo(KabKota::class, 'kab_kota_id');
    }
}
