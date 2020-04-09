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
//route sur acces page welcome
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

//routes concernant les articles
Route::get('/articles', 'PostController@articles');
Route::get('/articles/{post_title}', 'PostController@voir');
Route::post('/articles/{post_title}', 'PostController@commentaire');//store

//routes concernant contact et son formulaire
Route::get('/contact', 'ContactController@contact');
Route::post('/contact','ContactController@store');

//route concernant les modifications d'articles avec CRUD
Route::get('/posts/index', 'PostController@modif');
Route::resource('posts','PostController');

