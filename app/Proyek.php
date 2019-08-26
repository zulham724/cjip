<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;
use Illuminate\Support\Facades\Auth;

class Proyek extends Model
{
    use Spatial;

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

}
