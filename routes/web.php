<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->name('index');
Route::post('/reservation','ReservationController@reserve')->name('reservation.reserve');
Route::post('/contact','ContactController@sendMessage')->name('contact.send');

Auth::routes();





Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){

    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');

    Route::get('/about_us',[BlogController::class,'About']);
    Route::get('/features',[BlogController::class,'Features']);
    Route::get('/gallery',[BlogController::class,'Gallery']);
    Route::get('/team',[BlogController::class,'Team']);
    Route::get('/price',[BlogController::class,'Price']);
    Route::get('/new_blog',[BlogController::class,'Create']);
    Route::post('/blog_post',[BlogController::class,'Store']);
    Route::get('/manage_blog',[BlogController::class,'BlogManage']);

    
    Route::post('/profile/update', 'UserController@Update')->name('user.profile.update');

});