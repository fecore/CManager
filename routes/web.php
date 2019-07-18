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


// Register CManager Routes

Route::group
(
    [
        'namespace' => 'CManager',
        'prefix' => 'cmanager'
    ]
    , function()
    {
        Route::get('/', 'MainController@index');
        Route::resource('/pages', 'PageController');
    }
);



//Route::get('{catchall}', 'CRouteManager@get')->where('catchall', '.*');
//Route::get('{catchall}', 'test@post')->where('catchall', '.*');
//Route::get('{catchall}', 'test@put')->where('catchall', '.*');
//Route::get('{catchall}', 'test@patch')->where('catchall', '.*');
//Route::get('{catchall}', 'test@delete')->where('catchall', '.*');
//Route::get('{catchall}', 'test@options')->where('catchall', '.*');
