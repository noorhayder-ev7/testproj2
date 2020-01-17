<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\SellMenu;
class Oldmenucontroller extends Controller
{
    public function oldmenu(Request $request){

        $body = $request->all();
        $id= $body['id'];
        $data = (new \App\models\SellMenuItem)->where('sell_menu_id', $id)->get();
        if ($data)
        {
            return response()->json($data);

        }
        else
            return response()->json(['message'=> 'NOT FOUND']);


    }
}
