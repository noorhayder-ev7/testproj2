<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SellMenu extends Model
{
    protected $table = 'sell_menu';
    public $timestamps = false;
    public function SellMenuItem()
    {
        return $this->hasMany('App\models\SellMenuItem');

    }
}
