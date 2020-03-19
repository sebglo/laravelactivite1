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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index');
Route::get('/articles', 'PostController@articles');
Route::get('/contact', 'ContactController@contact');
Route::get('/home', 'HomeController@index');
Route::get('/articles/{post_title}', 'PostController@show');
//Route::get('/article', 'PostController@article');

