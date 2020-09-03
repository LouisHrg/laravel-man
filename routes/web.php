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

Route::get('/', 'IndexController@Index')->name('index');

Auth::routes();


Route::middleware('auth')->group(function() {

  Route::get('/home', 'HomeController@index')->name('home');

  // Post routes
  Route::get('/posts', 'PostController@index')->name('posts.index');

  Route::get('/posts/create', 'PostController@create')->name('posts.create');

  Route::post('/posts/store', 'PostController@store')->name('posts.store');


  Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

  Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');

  Route::post('/posts/{post}/update', 'PostController@update')
  ->name('posts.update');

  Route::delete('/posts/{post}/delete', 'PostController@delete')
  ->name('posts.delete');

  Route::get('/categories', 'CategoryController@index')
  ->name('categories.index');

  Route::get('/categories/create', 'CategoryController@create')
  ->name('categories.create');

  Route::get('/categories/{category}', 'CategoryController@show')
  ->name('categories.show');


  Route::post('/categories/store', 'CategoryController@store')
  ->name('categories.store');

  Route::get('/categories/{category}/edit', 'CategoryController@edit')
  ->name('categories.edit');

  Route::post('/categories/{category}/update', 'CategoryController@update')
  ->name('categories.update');

  Route::delete('/categories/{category}/delete', 'CategoryController@delete')
  ->name('categories.delete');
});
