<?php
namespace App\Http\Controllers\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Customer;
use App\models\SellMenu;
class Customercontroller extends Controller
{
    public function create(Request $request)
    {
        $Customers=new Customer();
        $Customers->name="زبون";
        $Customers->note="NULL";
        $Customers->type="0";
        $Customers->f1="زبون";
        $Customers->save();
        $sellmenu=new SellMenu();
        $sellmenu->customer_id = $Customers->id;
        $mydate = Carbon::now();
         $mydate->toDateTimeString();
         $sellmenu->date=$mydate;
        $sellmenu->time=$mydate;
        $sellmenu->discount="0";
        $sellmenu->status="0";
        $sellmenu->f1="مؤقت";
        $sellmenu->user_finshed_id="0";
        $sellmenu->save();
        if ($sellmenu)
        {
            return response()->json($sellmenu->id);

        }
        else
            return response()->json(['message'=> 'ERROR']);




    }





}

