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

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WorkController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('works', 'WorkController');

Route::get('/search','WorkController@search')->name('works.search');

Route::get('/genre/{genre?}','WorkController@genre')->name('works.genre');

Route::get('/broadcast_time/{broadcast_time?}','WorkController@broadcast_time')->name('works.broadcast_time');

Route::get('/usa_broadcaster/{usa_broadcaster?}','WorkController@usa_broadcaster')->name('works.usa_broadcaster');
