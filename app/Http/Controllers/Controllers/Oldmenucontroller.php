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
          $data = SellMenu::where('id', $id)
            ->where('status', 0)
            ->with('SellMenuItem')
            ->get();
        if ($data)
        {
            return response()->json($data);

        }
        else
            return response()->json(['message'=> 'NOT FOUND']);


    }
}
