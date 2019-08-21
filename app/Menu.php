<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Menu extends Model
{

    use Translatable;
    protected $table = 'menu_items';

    public function menu_parent(){
        return $this->belongsTo(MenuParent::class, 'menu_id');
    }
}
