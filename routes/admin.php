<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', ], 'prefix' => 'admin', 'as' => 'admin.'], function(){
     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

});
