<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\SellMenuItem;
class Updatecontroller extends Controller
{
    public function update(Request $request){

        $body = $request->all();
        $id= $body['id'];
        $itemcount=$body['item_count'];
        $datetime=$body['datetime'];
        $data = SellMenuItem::where('id', $id)->update(['item_count'=>$itemcount,'datetime'=>$datetime]);
        if ($data)
        {
            return response()->json(['message'=> 'update DONE']);

        }
        else
            return response()->json(['message'=> 'NOT FOUND']);


    }
}
