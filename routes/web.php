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
  $menus = [
      [
        'title' => 'Change Log',
        'childs' => [],
        'path' => '#page-top'
      ],[
        'title' => 'Notices',
        'path' => '#about',
        'childs' => [
          ['title' =>'Proprietary Rights','path' => '#about'],
          ['title' =>'Disclaimer','path' => '#about']]
      ],[
        'title' => 'Overview',
        'path' => '#services',
        'childs' => [
          ['title' =>'Spesification','path' => '#services'],
          ['title' =>'Message Specification Format','path' => '#services'],
          ['title' =>'Authentication','path' => '#services']]
      ],[
        'title' => 'Services',
        'path' => '#services',
        'childs' => [
          ['title' =>'Callback Cancel Order','path' => '#services'],
          ['title' =>'Callback VA Selisih','path' => '#services'],
          ['title' =>'Callback Pickup','path' => '#services'],
          ['title' =>'Callback Info','path' => '#services'],
          ['title' =>'Callback Transaction Info','path' => '#services'],

          ]
      ],
  ];
    return view('index',['menus'=>$menus]);
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