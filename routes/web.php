<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

Route::prefix('/admin')->group(function(){
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'loginAction']);


   
    Route::get('/flv', [AdminController::class, 'flv']);
    Route::post('/flv', [AdminController::class, 'flvRegister']);

    Route::get('/mer', [AdminController::class, 'mer']);
    Route::post('/mer', [AdminController::class, 'merRegister']);

    Route::get('/pas', [AdminController::class, 'pas']);
    Route::post('/pas', [AdminController::class, 'pasRegister']);
    

    
});

