<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use TCG\Voyager\Traits\Spatial;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Traits\Translatable;

class Proyek extends Model
{
    use Spatial;

    use Translatable;

    protected $translatable = [
        'project_name', 'latar_belakang',
        'lingkup_pekerjaan',
        'eksisting',
        'luas_lahan',
        'status_kepemilikan',
        'skema_investasi',
        'npv',
        'irr',
        'bc_ratio',
        'playback_period',
        'cp_alamat',
    ];

    protected $spatial = ['location'];

    public function kabkota(){
        return $this->belongsTo(User::class, 'kab_kota_id');
    }

    public function save(array $options = [])
    {
        if(Auth::user()->hasRole('kab')){
            $this->kab_kota_id = Auth::user()->id;
        };

        parent::save();
    }

    public function marketplace(){
        return $this->belongsTo(JenisMarketplace::class, 'market_id');
    }

    public function bySector(){
        return $this->belongsTo(CjibfSektor::class, 'sektor_id');
    }

    public function byUser(){
        return $this->belongsTo(User::class, 'kab_kota_id');
    }

    public function search(){
        $this->morphMany(Search::class,'searchable');
    }

}
