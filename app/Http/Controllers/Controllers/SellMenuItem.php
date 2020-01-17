<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Item;
use App\models\User;
use App\models\Customer;
use App\models\SellMenu;

class SellMenuItem extends Controller
{ public function SMI(Request $request)
{   $sellmenuitem=new \App\models\SellMenuItem();
    $sellmenuitem->user_sell_it_id =$request->input('user_sell_it_id');
    $sellmenuitem->sell_menu_id = $request->input('sell_menu_id');
    $sellmenuitem->item_name =$request->input('item_name');
    $sellmenuitem->item_price =$request->input('item_price');
    $sellmenuitem->item_count = $request->input('item_count');
    $sellmenuitem->item_id = $request->input('item_id');
    $sellmenuitem->item_cost = $request->input('item_cost');
    $sellmenuitem->datetime = $request->input('datetime');
    $sellmenuitem->save();
    if ($sellmenuitem)
    {
        return response()->json($sellmenuitem);

    }
    else
        return response()->json(['message'=> 'ERROR']);



}



}
