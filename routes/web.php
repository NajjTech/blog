<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->name('index');
Route::get('/blog',[HomeController::class,'Blogger'])->name('blog');

Auth::routes();

Route::get('/logout', [LoginController::class,'logout']);





Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){

    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');

    Route::get('/about_us',[BlogController::class,'About']);
    Route::get('/features',[BlogController::class,'Features']);
    Route::get('/gallery',[BlogController::class,'Gallery']);
    Route::get('/team',[BlogController::class,'Team']);

    // Price List
    Route::get('/price',[PriceController::class,'Price']);
    Route::post('/price_store',[PriceController::class,'PriceStore']);
    Route::get('/price_status/{id}/{status}',[PriceController::class,'PriceStatus']);
    Route::get('/edit_price/{id}',[PriceController::class,'EditPrice']);
    Route::post('/update_price/{id}',[PriceController::class,'UpdatePrice']);
    Route::get('/viewprice/{id}',[PriceController::class,'ViewPrice']);
    Route::get('/delete_price/{id}',[PriceController::class,'DeletePrice']);


    // Team List
    Route::get('/manage_dev',[TeamController::class,'index']);
    Route::get('/new_dev',[TeamController::class,'create']);
    Route::post('/price_store',[TeamController::class,'Store']);
    Route::get('/price_status/{id}/{status}',[TeamController::class,'PriceStatus']);
    Route::get('/edit_price/{id}',[TeamController::class,'EditPrice']);
    Route::post('/update_price/{id}',[TeamController::class,'UpdatePrice']);
    Route::get('/viewprice/{id}',[TeamController::class,'ViewPrice']);
    Route::get('/delete_price/{id}',[TeamController::class,'DeletePrice']);



    Route::get('/new_blog',[BlogController::class,'Create']);
    Route::post('/blog_post',[BlogController::class,'Store']);
    Route::get('/manage_blog',[BlogController::class,'BlogManage']);

    
});