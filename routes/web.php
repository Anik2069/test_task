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

Route::get('/admin', function () {
    return view('admin.login');
});
Route::post('/submitlogin','AdminController@submitdata');
Route::group(['middleware' => 'userauth'], function () {
    Route::get('/index',"AdminController@index");
    Route::get('/create_post',"PostsController@index");
    Route::post('/submitpost','PostsController@submitdata');

    Route::get('/view_all',"PostsController@view_all");
    Route::get('/change/{id}',"PostsController@change");
    Route::get('/dlt/{id}',"PostsController@dlt");
    Route::get('/change_password',"AdminController@change");

    Route::post('/submitchangeadmin','AdminController@submitchange');
    Route::get('/logout',"AdminController@logout");

});


Route::get('/',"publicview@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view_Video_post/{id}',"publicview@change");
Route::get('/view_post/{id}',"publicview@change");
