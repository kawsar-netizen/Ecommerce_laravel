<?php

use Illuminate\Support\Facades\Route;

// Route::get('check',function(){
//  echo "This is a admin route";
// });



Route::get('/admin-login', [App\Http\Controllers\Auth\LoginController::class, 'adminlogin'])->name('admin.login');


// Route::get('/admin/home', [App\Http\Controllers\HomeController::class,'admin'])
// ->name('admin.home')->middleware('is_admin');

Route::group(['namespace'=>'App\Http\Controllers\Admin','middleware'=>'is_admin'],function(){
    Route::get('/admin/home', 'AdminController@admin')->name('admin.home');
    Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');

    //category routes
    Route::group(['prefix'=>'category'],function(){
    Route::get('/', 'CategoryController@index')->name('category.index');
    Route::post('/store', 'CategoryController@store')->name('category.store');
    Route::get('/edit/{id}', 'CategoryController@edit');
    Route::post('/update', 'CategoryController@update')->name('category.update');
    Route::get('/destory/{id}', 'CategoryController@destory')->name('category.destory');
    });
});


