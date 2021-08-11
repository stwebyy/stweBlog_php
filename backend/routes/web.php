<?php

Route::get('/', 'TopController@index')->name('index');
Route::prefix('blog')->group(function() {
    Route::get('/{id}', 'BlogController@show')->name('blog_show');
});
Route::prefix('tag')->group(function() {
    Route::get('/{id}', 'TagController@show')->name('tag_show');
});

// Voyagerのデフォルトルーティング
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
