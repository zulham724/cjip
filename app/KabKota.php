<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KabKota extends Model
{

    protected $connection ='mysql';
    protected $table = 'kab_kotas';
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(KabkotaUserModel::class, 'id', 'kab_kota_id');
    }
}
