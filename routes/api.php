<?php

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
//Route::get('/login', '');

Route::group(['middleware' => ['auth:api']], function () {

    Route::get('/products', 'ProductController@getProducts');

    Route::get('/products/{id}', 'ProductController@getProductInfo');

});

//Route::get('/users/{email}/{hashPassword}', function ($email, $hashPassword){
//    $result = \App\User::findUser($email, $hashPassword);
//    return $result;
//});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
