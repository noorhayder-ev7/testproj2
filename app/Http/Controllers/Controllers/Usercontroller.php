<?php
namespace App\Http\Controllers\Controllers;
use App\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\User;
class Usercontroller extends Controller
{

    public function login(Request $request){

        $body = $request->all();
        $password = $body['secret_word'];
        $data = (new \App\models\User)->where('secret_word', $password)->first(['id','name']);

        return response()->json($data);
    }
}
