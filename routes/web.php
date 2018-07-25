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
Route::get('/', function () {
    return view('welcome');
});
*/

//Route the main pages
Route::get('/login', 'PagesController@login');
Route::get('/', 'PagesController@dashboard');
Route::get('/gtwelve', 'PagesController@gtwelve');
Route::get('/monthly', 'PagesController@monthly');
Route::get('/weekly', 'PagesController@weekly');
Route::get('/downloads', 'PagesController@downloads');

//Route the create pages
Route::get('/cuser', 'PagesController@cuser');
Route::get('/cbranch', 'PagesController@cbranch');
Route::get('/cgtwelve', 'PagesController@cgtwelve');
Route::get('/cevent', 'PagesController@cevent');
Route::get('/cpastor', 'PagesController@cpastor');
Route::get('/cpreacher', 'PagesController@cpreacher');
Route::get('/cdownloads', 'PagesController@cdownloads');