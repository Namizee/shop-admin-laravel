<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => '\App\Http\Controllers\Api'], function() {
    Route::get('/products','Product\IndexController')->name('api.product.index');
});

