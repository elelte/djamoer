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
Route::prefix('cms')->group(function ()  {

    Route::group(['middleware' => 'CMSAuth'], function () {
        Route::get('/', function () {
            return view('cms.dashboard.ind');
        });
        
        Route::get('akumulasi',      'web\cms\akumulasi@viewIndex');
        Route::get('akumulasi/edit', 'web\cms\akumulasi@viewEdit');
    
        Route::get('user',           'web\cms\user@viewIndex')->middleware("CMSAuth:ganalpratama@gmail.com");
        Route::get('user/edit',      'web\cms\user@viewEdit');
    });

    Route::get('login', 'web\cms\auth@index')->name('cms.login');
});

Route::get('/market', function () {
    return view('cms.market.market');
});

Route::get('/panen', function () {
    return view('cms.panen.panen');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'HomeController@login');
// Route::get('/login', function () {
//     return view('cms.login.login');
// });