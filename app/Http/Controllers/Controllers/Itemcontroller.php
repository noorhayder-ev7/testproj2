<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Item;
class Itemcontroller extends Controller
{
    public function item(Request $request){

        $body = $request->all();
        $barcode = $body['barcode'];
        $data = (new \App\models\Item)->where('barcode', $barcode)->where('status', 0)->first();
        if ($data)
        {
            return response()->json($data);

        }
        else
            return response()->json(['message'=> 'ERROR']);

    }
}
