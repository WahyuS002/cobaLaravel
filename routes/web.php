<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     $nama = "Wahyu Syahputra";
//     return view('about', ['nama' => $nama]);
// });

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');

Route::get('/anime','AnimeController@index');
