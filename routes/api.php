<?php

use App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;

//Route::middleware(['auth:sanctum'])->group(function () {
//    Route::resource('users', Controllers\Api\UserApiController::class);
//});

Route::post('register', [Api\UserApiController::class, 'store'])->name('api.users.register');
Route::post('register/status', [Api\UserApiController::class, 'showRegisterStatus'])->name('api.users.register.status');
