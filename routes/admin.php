<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
     Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
     Route::post('/update/profile', [AdminController::class, 'updateProfile'])->name('updateProfile');
     Route::get('/activities', [AdminController::class, 'activities'])->name('activities');
     Route::get('/security', [AdminController::class, 'security'])->name('security');

     Route::get('users', [UserController::class, 'index'])->name('users.index');
});
