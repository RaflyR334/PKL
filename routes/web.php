<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin Atau Backend
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){
    Route::get('/', function (){
        return view('admin.index');
    });

    // Route Selanjutnya ....
});

// Route Frontend(depan)
Route::get('/', [FrontController::class, 'index']);
Route::get('about',[FrontController::class, 'about']);
Route::get('contact',[FrontController::class, 'contact']);

