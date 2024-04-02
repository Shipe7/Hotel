<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CalendarRoomController;
use App\Http\Controllers\Api\NewUserController;
use App\Http\Controllers\Api\CalendarReservationController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\SettingsController;
use App\Http\Controllers\Api\InventoryController;
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

Route::post('/login',     [AuthController::class, 'store'])->name('login');
Route::post('/register',  [NewUserController::class, 'store'])->name('register');
Route::delete('/logout',  [AuthController::class, 'destroy'])->name('logout');


Route::post('/settings', [SettingsController::class, 'store'])->name('settings');

Route::middleware('auth')->group(function () {
    Route::apiResource('users',                 UserController::class)->only('store', 'update', 'destroy');
    Route::apiResource('calendar-rooms',        CalendarRoomController::class)->only('index');
    Route::apiResource('calendar-reservations', CalendarReservationController::class)->only('index');
    Route::apiResource('settings',                 SettingsController::class)->only('store', 'update', 'destroy');
    Route::apiResource('inventory',                 InventoryController::class)->only('store');

});
