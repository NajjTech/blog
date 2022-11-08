<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->name('index');
Route::get('/blog',[HomeController::class,'Blogger'])->name('blog');

Auth::routes();

Route::get('/logout', [LoginController::class,'logout']);





Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){

    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');

    // Price List
    Route::get('/price',[PriceController::class,'Price']);
    Route::post('/price_store',[PriceController::class,'PriceStore']);
    Route::get('/price_status/{id}/{status}',[PriceController::class,'PriceStatus']);
    Route::get('/edit_price/{id}',[PriceController::class,'EditPrice']);
    Route::post('/update_price/{id}',[PriceController::class,'UpdatePrice']);
    Route::get('/viewprice/{id}',[PriceController::class,'ViewPrice']);
    Route::get('/delete_price/{id}',[PriceController::class,'DeletePrice']);


    // Blog List
    Route::get('/manage_blog',[BlogController::class,'index']);
    Route::get('/new_blog',[BlogController::class,'create']);
    Route::post('/price_store',[BlogController::class,'Store']);
    Route::get('/price_status/{id}/{status}',[BlogController::class,'PriceStatus']);
    Route::get('/edit_price/{id}',[BlogController::class,'EditPrice']);
    Route::post('/update_price/{id}',[BlogController::class,'UpdatePrice']);
    Route::get('/viewprice/{id}',[BlogController::class,'ViewPrice']);
    Route::get('/delete_price/{id}',[BlogController::class,'DeletePrice']);



    
});