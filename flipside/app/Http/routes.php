<?php

use App\Setting;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $settings = Setting::find(1);
   // var_dump($settings);
    return view('welcome', ['settings' => $settings]);
});



Route::post('/admin', function () {
    $settings = Setting::find(1);
    $pass = $_POST['password'];
    if($pass == "tittens"){
        session(['logged' => true]);
        return view('control', ['settings' => $settings]);
    }

    return view('admin', ['settings' => $settings]);
});

Route::get('/store', function () {
    $settings = Setting::find(1);
    if(session('logged')) {
        return view('store', ['settings' => $settings]);
    }
    return view('store', ['settings' => $settings]);
});


Route::post('/store', function () {
    $settings = Setting::find(1);
    if(session('logged')) {
        return view('store', ['settings' => $settings]);
    }
    return view('store', ['settings' => $settings]);
});