<?php
use Illuminate\Http\Request;


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
    return view('welcome');
});

Route::get('/rescued',function (){
    return view('upload');
});


Route::post('/addsnake','SnakesController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/add-rescuer','RescuersController@index');

Route::post('/admin/rescuer', 'RescuersController@store');


Route::get('/call-rescuers','RescuersController@callRescuers');

Route::get('/search-rescuers','RescuersController@searchRescuers')->name('search-rescuers');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

