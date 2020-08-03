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
Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@welcome');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/login', function () {
    return view('login');
});


//l'ordre a une importance
Route::get('/blog', 'ArticlesController@index');
Route::post('/blog', 'ArticlesController@store');
Route::get('/blog/create', 'ArticlesController@create');
Route::get('/blog/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/blog/{article}/edit', 'ArticlesController@edit');
Route::put('/blog/{article}', 'ArticlesController@update');
Route::delete('/blog/{article}', 'ArticlesController@destroy')->name('articles.destroy');
//routes de la corbeille
Route::delete('blog/force/{article}', 'ArticlesController@forceDestroy')->name('articles.force.destroy');
Route::put('blog/restore/{article}', 'ArticlesController@restore')->name('articles.restore');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

