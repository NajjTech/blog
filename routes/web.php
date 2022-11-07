<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->name('index');
Route::get('/blog',[HomeController::class,'Blogger']);

Auth::routes();

Route::get('/logout', [LoginController::class,'logout']);





Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){

    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');

    Route::get('/about_us',[BlogController::class,'About']);
    Route::get('/features',[BlogController::class,'Features']);
    Route::get('/gallery',[BlogController::class,'Gallery']);
    Route::get('/team',[BlogController::class,'Team']);
    Route::get('/price',[BlogController::class,'Price']);
    Route::post('/price_store',[BlogController::class,'PriceStore']);
    Route::get('/price_status/{id}/{status}',[BlogController::class,'PriceStatus']);
    Route::get('/edit_price/{id}',[BlogController::class,'EditPrice']);
    Route::post('/update_price/{id}',[BlogController::class,'UpdatePrice']);
    Route::get('/viewprice/{id}',[BlogController::class,'ViewPrice']);
    Route::get('/delete_price/{id}',[BlogController::class,'DeletePrice']);



    Route::get('/new_blog',[BlogController::class,'Create']);
    Route::post('/blog_post',[BlogController::class,'Store']);
    Route::get('/manage_blog',[BlogController::class,'BlogManage']);

    
});