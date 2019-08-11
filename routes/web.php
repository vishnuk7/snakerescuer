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
// homnepage
Route::get('/', function () {
    return view('welcome');
});

// add a snake
Route::get('/rescued',function (){
    return view('upload');
})->name('rescued');

Route::post('/addsnake','SnakesController@store');

// authentication routes
Auth::routes();

// login
Route::get('/home', 'HomeController@index')->name('home');

// admin dashboard
Route::get('/admin', function () {
    return view('admin/dashboard');
});

// (admin) add rescuer
Route::get('/admin/add-rescuer','RescuersController@index');

Route::post('/admin/rescuer', 'RescuersController@store');

// (admin) view all snakes
Route::get('/admin/rescued-snakes','SnakesController@viewSnakes');

// contact a rescuer
Route::get('/call-rescuers','RescuersController@callRescuers');

// rescuer search
Route::get('/search-rescuers','RescuersController@searchRescuers')->name('search-rescuers');

//logout
Route::get('/logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
