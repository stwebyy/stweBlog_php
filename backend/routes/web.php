<?php

Route::get('/', 'TopController@index')->name('index');

Route::prefix('blog')->group(function() {
    Route::get('/', 'BlogController@index')->name('blog_index');
    Route::get('/{id}', 'BlogController@show')->name('blog_show');
});

// Voyagerのデフォルトルーティング
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
