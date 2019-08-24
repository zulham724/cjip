<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class ProfilKabupaten extends Model
{
    public function kabkota(){
        return $this->belongsTo(User::class, 'kab_kota_id');
    }
   protected $table = 'profil_kabupatens';
}
