<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class ProfilKabupaten extends Model
{
    public function kabkota(){
        return $this->belongsTo(User::class, 'kab_kota_id');
    }
   protected $table = 'profil_kabupatens';

    use Translatable;
    protected $translatable = ['profil', 'infrastruktur', 'jarak_ke_smg', 'rtrw', 'pert_ekonomi',
        'komp_usia', 'bc_ratio', 'luas_lahan', 'project_name'
    ];
}
