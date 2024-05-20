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
        'title' => 'Notices',
        'path' => '#about',
        'childs' => [
          ['title' =>'- Proprietary Rights','path' => '#about'],]
      ],[
        'title' => 'Overview',
        'path' => '#services',
        'childs' => [
          ['title' =>'- Spesification','path' => '#services'],
          ['title' =>'- Authentication','path' => '#authentication']]
      ],[
        'title' => 'Integration Services',
        'path' => '#services',
        'childs' => [
          ['title' =>'Notification Services','path' => '#cancelorder', 'subchilds' => [
              ['title' =>'1. Callback Cancel Order','path' => '#cancelorder'],
              ['title' =>'2. Callback VA Selisih','path' => '#selisih'],
              ['title' =>'3. Callback Pickup','path' => '#pickup'],
              ['title' =>'4. Callback Info','path' => '#info'],
              ['title' =>'5. Callback Transaction Info','path' => '#transactioninfo'],
            ]
          ],
          // ['title' =>'dddd','path' => '#cancelorder']
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