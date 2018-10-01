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

Route::get('/', 'Api\ApiController@news')->name('newNews');

Route::prefix('news')->group(function () {
    Route::get('bests', 'Api\ApiController@bests')->name('bestsNews');
    Route::get('new', 'Api\ApiController@news')->name('newNews');
    Route::get('top', 'Api\ApiController@tops')->name('topNews');


});
