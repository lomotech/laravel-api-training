<?php

use App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;

//Route::middleware(['auth:sanctum'])->group(function () {
//    Route::resource('users', Controllers\Api\UserApiController::class);
//});

Route::get('states', [Api\StateApiController::class, 'index'])->name('api.states.index');
Route::get('districts', [Api\DistrictApiController::class, 'index'])->name('api.districts.index');
Route::get('sub_districts', [Api\SubDistrictApiController::class, 'index'])->name('api.sub_districts.index');
Route::get('education_levels', [Api\EducationLevelApiController::class, 'index'])->name('api.education_levels.index');
Route::get('occupation_statuses', [Api\OccupationStatusApiController::class, 'index'])->name('api.occupation_statuses.index');
Route::get('races', [Api\RaceApiController::class, 'index'])->name('api.races.index');
Route::get('religions', [Api\ReligionApiController::class, 'index'])->name('api.religions.index');
Route::get('statuses', [Api\StatusApiController::class, 'index'])->name('api.statuses.index');

Route::post('register', [Api\UserApiController::class, 'store'])->name('api.users.register');
Route::post('register/status', [Api\UserApiController::class, 'showRegisterStatus'])->name('api.users.register.status');
