<?php

use Illuminate\Support\Facades\Route;

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



/*
|--------------------------------------------------------------------------
| All admin routes
|--------------------------------------------------------------------------
*/
// (admin) dashboard

Route::get('/admin', 'CommonController@home');

// (admin) add rescuer
Route::get('/admin/add-rescuer','RescuersController@index');

Route::post('/admin/rescuer', 'RescuersController@store');

// (admin) view all snakes
Route::get('/admin/rescued-snakes','SnakesController@viewSnakes')->name('rescued-snakes');

// delete snake
Route::get('/admin/rescued-snakes/delete/{id}/{image}/{userId}', ['uses' => 'SnakesController@destroy', 'as' => 'snakes.delete']);

// delete snake
Route::get('/admin/all-rescuers/delete/{id}/{image}', ['uses' => 'RescuersController@destroy', 'as' => 'rescuers.delete']);

//(admin) view all user
Route::get('/admin/all-rescuers','RescuersController@viewUser')->name('all-rescuers');



/*
|--------------------------------------------------------------------------
| Homepage
|--------------------------------------------------------------------------
*/
Route::get('/','CommonController@welcome')->name('welcome');


// authentication routes
Auth::routes();



/*
|--------------------------------------------------------------------------
| Login and logout routes
|--------------------------------------------------------------------------
*/
// login
Route::get('/home', 'HomeController@index')->name('home');

//logout
Route::get('/logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});



/*
|--------------------------------------------------------------------------
| All snake routes
|--------------------------------------------------------------------------
*/
// add a snake
Route::get('/rescued',function (){
    return view('upload');
})->name('rescued');

Route::post('/addsnake','SnakesController@store');



/*
|--------------------------------------------------------------------------
| All rescuer routes
|--------------------------------------------------------------------------
*/
// contact a rescuer
Route::get('/call-rescuers','RescuersController@callRescuers')->name('call-rescuers');

// rescuer search
Route::get('/search-rescuers','RescuersController@searchRescuers')->name('search-rescuers');



/*
|--------------------------------------------------------------------------
| Blog
|--------------------------------------------------------------------------
*/
Route::get('/blog','CommonController@blog')->name('blog');



/*
|--------------------------------------------------------------------------
| Individual rescue count
|--------------------------------------------------------------------------
*/
Route::get('/individualRescue','CommonController@individualRescue')->name('individualRescue');
