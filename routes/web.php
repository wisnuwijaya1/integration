<?php

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
    return view('index');
});


//route untuk memanggil view contoh1.php
Route::get('/contoh1/{nama}', function ($nama) {
  return view('contoh1',['nama'=>$nama]);
});
//route untuk memanggil view contoh2.php
Route::get('/contoh2/{nama}', function ($nama) {
  return view('contoh2',['nama'=>$nama]);
});

Route::resource('landingpage','LandingController');
// Route::get('landingpage/list', 'KinerjaPeriodeController@list');