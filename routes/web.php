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

Route::get('/', function () {
    return view('cms.dashboard.ind');
});

Route::get('/akumulasi', function () {
    return view('cms.akumulasi.akumul');
});
Route::get('/akumulasi/edit', function () {
    return view('cms.akumulasi.edit');
});

Route::get('/user', function () {
    return view('cms.user.index');
});
Route::get('/user/edit', function () {
    return view('cms.user.edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'HomeController@login');
// Route::get('/login', function () {
//     return view('cms.login.login');
// });