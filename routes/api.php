<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
Route::post('/user','Controllers\Usercontroller@login');
Route::get('/newsellmenu','Controllers\Customercontroller@create');
Route::post('/delete','Controllers\Deletecontroller@delete');
Route::post('/item','Controllers\Itemcontroller@item');
Route::post('/sellmenuitem','Controllers\SellMenuItem@SMI');
Route::post('/oldmenu','Controllers\Oldmenucontroller@oldmenu');


