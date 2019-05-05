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
        Route::get('/', 'web\cms\auth_controller@toHome')->name('cms-home');;
        
        Route::get('akumulasi',      'web\cms\akumulasi@viewIndex');
        Route::get('akumulasi/edit', 'web\cms\akumulasi@viewEdit');
    
        Route::get('user',            'web\cms\user_controller@viewIndex');
        Route::get('user/edit/{id}',  'web\cms\user_controller@viewEdit');
        Route::post('user/edit/{id}', 'web\cms\user_controller@updateUser');
        Route::get('user/add',        'web\cms\user_controller@viewAdd');
        Route::post('user/add',       'web\cms\user_controller@createUser');

        Route::get('market',      'web\cms\akumulasi@viewIndex');
        Route::get('market/edit', 'web\cms\akumulasi@viewEdit');

        Route::get('panen',      'web\cms\panen_controller@viewIndex');
        Route::get('panen/edit', 'web\cms\panen_controller@viewEdit');
    });

    Route::get('login',        'web\cms\auth_controller@index')->name('cms.login');
    Route::post('login/post',  'web\cms\auth_controller@loginProcess');
    Route::get('logout',      'web\cms\auth_controller@logout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'HomeController@login');
// Route::get('/login', function () {
//     return view('cms.login.login');
// });