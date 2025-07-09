<?php

use Illuminate\Support\Facades\Route;

// Route::get('check',function(){
//  echo "This is a admin route";
// });


Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'admin'])
->name('admin.home')->middleware('is_admin');


