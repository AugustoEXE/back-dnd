<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\SpellController;
use App\Http\Controllers\WeaponController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::prefix('spells')->group(function () {
    Route::get('', [SpellController::class, 'index']);
    Route::post('', [SpellController::class, 'store']);
    Route::put('{spell}', [SpellController::class, 'update']);
    Route::delete('{spell}', [SpellController::class, 'destroy']);
});

Route::prefix('classes')->group(function () {
    Route::get('', [ClassesController::class, 'index']);
    Route::post('', [ClassesController::class, 'store']);
    Route::put('{classes}', [ClassesController::class, 'update']);
    Route::delete('{classes}', [ClassesController::class, 'destroy']);
});

Route::prefix('races')->group(function () {
    Route::get('', [RaceController::class, 'index']);
    Route::post('', [RaceController::class, 'store']);
    Route::put('{race}', [RaceController::class, 'update']);
    Route::delete('{race}', [RaceController::class, 'destroy']);
});

Route::prefix('weapons')->group(function () {
    Route::get('', [WeaponController::class, 'index']);
    Route::post('', [WeaponController::class, 'store']);
    Route::put('{weapon}', [WeaponController::class, 'update']);
    Route::delete('{weapon}', [WeaponController::class, 'destroy']);
});

Route::prefix('creatures')->group(function () {
    Route::get('', [WeaponController::class, 'index']);
    Route::post('', [WeaponController::class, 'store']);
    Route::put('{creature}', [WeaponController::class, 'update']);
    Route::delete('{creature}', [WeaponController::class, 'destroy']);
});
