<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\SellMenuItem;
class Deletecontroller extends Controller
{
    public function delete(Request $request){

        $body = $request->all();
        $id= $body['id'];
        $data = (new \App\models\SellMenuItem)->where('id', $id)->delete();
        if ($data)
        {
            return response()->json(['message'=> 'DONE']);

        }
        else
            return response()->json(['message'=> 'NOT FOUND']);


    }
}
