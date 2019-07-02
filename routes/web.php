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
        
        Route::get('/', 'Web\Cms\auth_controller@toHome')->name('cms-home');;
        
        Route::get('akumulasi',      'Web\Cms\akumulasi@viewIndex');
        Route::get('akumulasi/edit', 'Web\Cms\akumulasi@viewEdit');
    
        Route::get('user',            'Web\Cms\user_controller@viewIndex');
        Route::get('user/edit/{id}',  'Web\Cms\user_controller@viewEdit');
        Route::post('user/edit/{id}', 'Web\Cms\user_controller@updateUser');
        Route::get('user/add',        'Web\Cms\user_controller@viewAdd');
        Route::post('user/add',       'Web\Cms\user_controller@createUser');

        Route::get('market',      'Web\Cms\akumulasi@viewIndex');
        Route::get('market/edit', 'Web\Cms\akumulasi@viewEdit');

        Route::get('laporan_panen',      'Web\Cms\panen\laporan_panen_controller@viewIndex');
        Route::get('laporan_panen/edit/{id}', 'Web\Cms\panen\laporan_panen_controller@viewEdit');

        Route::get('tahap_panen',      'Web\Cms\panen\tahap_panen_controller@viewIndex');
        Route::get('tahap_panen/edit/{id}', 'Web\Cms\panen\tahap_panen_controller@viewEdit');
        
    });

    Route::get('login',        'Web\Cms\auth_controller@index')->name('cms.login');
    Route::post('login/post',  'Web\Cms\auth_controller@loginProcess');
    Route::get('logout',      'Web\Cms\auth_controller@logout');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'HomeController@login');
// Route::get('/login', function () {
//     return view('cms.login.login');
// });