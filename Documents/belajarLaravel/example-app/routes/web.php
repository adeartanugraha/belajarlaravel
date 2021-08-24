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
    return view('index', [
        "name" => "Bagus Made Arta Nugraha",
        "email" => "bagusmadearta01@gmail.com",
        "image" => "megel.png"
    ]);
});

Route::get('contoh', function () {
    return view('contoh', ["name"=>"anda", "handphone"=>"0892347521"]);
});

Route::get('action', function (Request $request) {
    $name = $request->name;
    return "my name is ($name)";
});
