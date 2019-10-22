<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SettingLo extends Model
{
    public $timestamps = false;
<<<<<<< HEAD
=======

>>>>>>> 5bdb1b243385406d3dcd000dde6fffc3c509f179
    public function meja(){
        return $this->belongsToMany(CjibfTable::class, 'lo_mejas', 'setting_lo_id');
    }
}
