<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $ps=[[
        'id'=> 1 ,
        'name'=>'sumthing',
        'age'=>22,
        'sex'=> 'lmao'
    ],[ 
        'id'=>2,
        'name'=>'sumthing2',
        'age'=>32,
        'sex'=> 'lmaooo'
    ],[  
        'id'=>3,
        'name'=>'sumthing3',
        'age'=>32,
        'sex'=> 'lmaooo'
    ]];
    return view('auth.login', compact('ps'));
});

Route::get('/home', function(){return view('home');});
Route::get('/product', function(){return view('product');});

Route::get('/users/{userId}/{username?}', function (
    Request $request,
    $userId,
    $userName = 'profile'
) {
    dd($userId, $userName, $request->all());
});
