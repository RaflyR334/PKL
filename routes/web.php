<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\UsersController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin Atau Backend
// Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){
//     Route::get('/', function (){
//         return view('admin.index');
//     });
// });

Route::group(['prefix'=>'admin', 'middleware'=>['auth',IsAdmin::class]], function (){
    Route::get('/',function(){
        return view('admin.index');
    });

    // Route Lainnya ....
    Route::resource('user',App\Http\Controllers\UsersController::class);
});


// Route Frontend(depan)
Route::get('/', [FrontController::class, 'index']);
Route::get('about',[FrontController::class, 'about']);
Route::get('contact',[FrontController::class, 'contact']);
Route::get('product',[FrontController::class, 'product']);
Route::get('detailpro',[FrontController::class, 'detailpro']);
Route::get('cart',[FrontController::class, 'cart']);
Route::get('compaire',[FrontController::class, 'compaire']);
Route::get('wishlist',[FrontController::class, 'wishlist']);
Route::get('userd',[FrontController::class, 'userd']);

