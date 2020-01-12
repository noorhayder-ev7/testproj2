<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Item;
class Itemcontroller extends Controller
{
    public function gg(Request $request){

        $body = $request->all();
        $barcode = $body['barcode'];
        $data = (new \App\models\Item)->where('barcode', $barcode)->first();
        return response()->json($data);
    }
}
