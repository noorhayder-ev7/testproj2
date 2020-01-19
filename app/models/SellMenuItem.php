<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SellMenuItem extends Model
{
    protected $table = 'sell_menu_item';
    public $timestamps = false;
    public function SellMenu()
    {
        return $this->belongsTo('App\models\SellMenu');
    }


}
