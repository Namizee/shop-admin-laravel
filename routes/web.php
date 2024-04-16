<?php


use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['namespace' => '\App\Http\Controllers\Category', 'prefix' => 'categories'], function() {
    Route::get('/','IndexController')->name('category.index');
    Route::get('/create','CreateController')->name('category.create');
    Route::post('/store','StoreController')->name('category.store');
    Route::get('/{category}','ShowController')->name('category.show');
    Route::get('/{category}/edit','EditController')->name('category.edit');
    Route::patch('/{category}','UpdateController')->name('category.update');
    Route::delete('/{category}','DeleteController')->name('category.delete');
});

Route::group(['namespace' => '\App\Http\Controllers\Brand', 'prefix' => 'brands'], function() {
    Route::get('/','IndexController')->name('brand.index');
    Route::get('/create','CreateController')->name('brand.create');
    Route::post('/store','StoreController')->name('brand.store');
    Route::get('/{brand}','ShowController')->name('brand.show');
    Route::get('/{brand}/edit','EditController')->name('brand.edit');
    Route::patch('/{brand}','UpdateController')->name('brand.update');
    Route::delete('/{brand}','DeleteController')->name('brand.delete');
});

Route::group(['namespace' => '\App\Http\Controllers\Color', 'prefix' => 'colors'], function() {
    Route::get('/','IndexController')->name('color.index');
    Route::get('/create','CreateController')->name('color.create');
    Route::post('/store','StoreController')->name('color.store');
    Route::get('/{color}','ShowController')->name('color.show');
    Route::get('/{color}/edit','EditController')->name('color.edit');
    Route::patch('/{color}','UpdateController')->name('color.update');
    Route::delete('/{color}','DeleteController')->name('color.delete');
});

Route::group(['namespace' => '\App\Http\Controllers\User', 'prefix' => 'users'], function() {
    Route::get('/','IndexController')->name('user.index');
    Route::get('/create','CreateController')->name('user.create');
    Route::post('/store','StoreController')->name('user.store');
    Route::get('/{user}','ShowController')->name('user.show');
    Route::get('/{user}/edit','EditController')->name('user.edit');
    Route::patch('/{user}','UpdateController')->name('user.update');
    Route::delete('/{user}','DeleteController')->name('user.delete');
});

Route::group(['namespace' => '\App\Http\Controllers\Product', 'prefix' => 'products'], function() {
    Route::get('/','IndexController')->name('product.index');
    Route::get('/create','CreateController')->name('product.create');
    Route::post('/store','StoreController')->name('product.store');
    Route::get('/{product}','ShowController')->name('product.show');
    Route::get('/{product}/edit','EditController')->name('product.edit');
    Route::patch('/{product}','UpdateController')->name('product.update');
    Route::delete('/{product}','DeleteController')->name('product.delete');
});
