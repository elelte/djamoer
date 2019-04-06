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
    
        Route::get('user',           'web\cms\user_controller@viewIndex')->middleware("CMSAuth:ganalpratama@gmail.com");
        Route::get('user/edit/{id}',  'web\cms\user_controller@viewEdit');
    });

    Route::get('login',        'web\cms\auth_controller@index')->name('cms.login');
    Route::post('login/post',  'web\cms\auth_controller@loginProcess');
    Route::get('logout',      'web\cms\auth_controller@logout');
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