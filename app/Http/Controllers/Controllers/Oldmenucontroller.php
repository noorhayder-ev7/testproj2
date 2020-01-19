<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\SellMenu;
use App\models\SellMenuItem;
class Oldmenucontroller extends Controller
{
    public function oldmenu(Request $request){

        $body = $request->all();
       $id= $body['id'];
        $user_id =$body['user_sell_it_id'];
        $data = SellMenu::where('id', $id)
            ->where('status', 0)
            ->with(['SellMenuItem'=> function($query) use($user_id) {
                $query->where('user_sell_it_id', $user_id);
            }])
            ->get();

        if ($data)
        {
            return response()->json($data);

        }
        else
            return response()->json(['message'=> 'NOT FOUND']);


    }
}
