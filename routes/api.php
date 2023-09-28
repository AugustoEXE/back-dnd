<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\CreatureController;
use App\Http\Controllers\CreatureTypeController;
use App\Http\Controllers\DamageTypeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MagicSchoolController;
use App\Http\Controllers\ProficienceController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\RarityController;
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
    Route::get('', [CreatureController::class, 'index']);
    Route::post('', [CreatureController::class, 'store']);
    Route::put('{creature}', [CreatureController::class, 'update']);
    Route::delete('{creature}', [CreatureController::class, 'destroy']);
});

Route::prefix('items')->group(function () {
    Route::get('', [ItemController::class, 'index']);
    Route::post('', [ItemController::class, 'store']);
    Route::put('{item}', [ItemController::class, 'update']);
    Route::delete('{item}', [ItemController::class, 'destroy']);
});

Route::prefix('categories')->group(function () {
    Route::get('', [CategoryController::class, 'index']);
    Route::post('', [CategoryController::class, 'store']);
    Route::put('{category}', [CategoryController::class, 'update']);
    Route::delete('{category}', [CategoryController::class, 'destroy']);
});

Route::prefix('creature-types')->group(function () {
    Route::get('', [CreatureTypeController::class, 'index']);
    Route::post('', [CreatureTypeController::class, 'store']);
    Route::put('{creature_type}', [CreatureTypeController::class, 'update']);
    Route::delete('{creature_type}', [CreatureTypeController::class, 'destroy']);
});

Route::prefix('magic-schools')->group(function () {
    Route::get('', [MagicSchoolController::class, 'index']);
    Route::post('', [MagicSchoolController::class, 'store']);
    Route::put('{magic_school}', [MagicSchoolController::class, 'update']);
    Route::delete('{magic_school}', [MagicSchoolController::class, 'destroy']);
});

Route::prefix('rarities')->group(function () {
    Route::get('', [RarityController::class, 'index']);
    Route::post('', [RarityController::class, 'store']);
    Route::put('{rarity}', [RarityController::class, 'update']);
    Route::delete('{rarity}', [RarityController::class, 'destroy']);
});

Route::prefix('languages')->group(function () {
    Route::get('', [LanguageController::class, 'index']);
    Route::post('', [LanguageController::class, 'store']);
    Route::put('{language}', [LanguageController::class, 'update']);
    Route::delete('{language}', [LanguageController::class, 'destroy']);
});

Route::prefix('categories')->group(function () {
    Route::get('', [CategoryController::class, 'index']);
    Route::post('', [CategoryController::class, 'store']);
    Route::put('{WeaponCategorie}', [CategoryController::class, 'update']);
    Route::delete('{WeaponCategorie}', [CategoryController::class, 'destroy']);
});

Route::prefix('damage-types')->group(function () {
    Route::get('', [DamageTypeController::class, 'index']);
    Route::post('', [DamageTypeController::class, 'store']);
    Route::put('{damage-type}', [DamageTypeController::class, 'update']);
    Route::delete('{damage-type}', [DamageTypeController::class, 'destroy']);
});

Route::prefix('proficiencies')->group(function () {
    Route::get('', [ProficienceController::class, 'index']);
    Route::post('', [ProficienceController::class, 'store']);
    Route::put('{proficience}', [ProficienceController::class, 'update']);
    Route::delete('{proficience}', [ProficienceController::class, 'destroy']);
});
