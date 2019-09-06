<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use TCG\Voyager\Traits\Translatable;


class ProfilKabupaten extends Model
{
    public function kabkota(){
        return $this->belongsTo(User::class, 'kab_kota_id');
    }
   protected $table = 'profil_kabupatens';

    use Translatable;
    use Searchable;
    protected $translatable = ['profil', 'jarak_ke_smg', 'rtrw', 'pert_ekonomi',
        'komp_usia'
    ];

}
