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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TopController@index')->name('index');

Route::prefix('blog')->group(function() {
    Route::get('/', 'BlogController@index')->name('blog_index');
    Route::get('/{id}', 'BlogController@show')->name('blog_show');
});
