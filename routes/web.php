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

//Testing Route
Route::get('/data-upload',function (){
    return view('upload');
});

Route::get('/admin/add-rescuer',function(){
    return view('admin/add-rescuer');
});


Route::get('/call-rescuer',function (){
    return view('callrescuer');
});

Route::post('/test1', function (Request $request) {

   dd($request->location);
})->name('test1');

//Testing Route


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

