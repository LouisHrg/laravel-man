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


Route::prefix('/admin')->middleware('auth')->group(function() {

  Route::get('/home', 'HomeController@index')->name('home');

  Route::resource('posts', 'PostController');

  Route::resource('categories', 'CategoryController');

});


Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('app/public/' . $filename);


    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->where('filename', '[A-Za-z0-9\/.\(\)-_]*');
