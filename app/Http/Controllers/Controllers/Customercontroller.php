<?php
namespace App\Http\Controllers\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Customer;
use App\models\SellMenu;
class Customercontroller extends Controller
{
    public function create(Request $request)
    {
        $Customers=new Customer();
        $Customers->name=$request->input('name');
        $Customers->note=$request->input('note');
        $Customers->type=$request->input('type');
        $Customers->save();
        $sellmenu=new SellMenu();
        $sellmenu->customer_id = $Customers->id;
        $sellmenu->date=$request->input('date');
        $sellmenu->time=$request->input('time');
        $sellmenu->discount=$request->input('discount');
        $sellmenu->status=$request->input('status');
        $sellmenu->save();
        return response()->json([$Customers,$sellmenu]);



    }





}

