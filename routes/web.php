<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontDeskController;
use App\Http\Controllers\OAuthController;
use App\Http\Controllers\HousekeepingController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'login')->name('home');

Route::middleware('guest')->group(function () {
    Route::view('/login',       'auth.login')->name('login');
    Route::view('/register',    'auth.register')->name('register');
});

Route::get('/oauth/{provider}/authorize', [OAuthController::class, 'create'])->name('oauth.create');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard',                    DashboardController::class)->name('dashboard');
    Route::get('/front-desk',                   FrontDeskController::class)->name('front-desk');
    Route::get('/housekeeping', [HousekeepingController::class, 'index'])->name('housekeeping');
    Route::get('/channel', [ChannelController::class, 'index'])->name('channel');
    Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');


    // Hotel settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::get('/settings/legal', [SettingsController::class, 'index1'])->name('settings1');
    Route::get('/settings/child', [SettingsController::class, 'indexchild'])->name('settingschild');
    Route::get('/settings/contract', [SettingsController::class, 'indexcontract'])->name('settingscontract');
    Route::get('/settings/facilities', [SettingsController::class, 'indexfacilities'])->name('settingsfacilities');
    Route::get('/settings/language', [SettingsController::class, 'indexlanguage'])->name('settingslanguage');
    Route::get('/settings/meals', [SettingsController::class, 'indexmeals'])->name('settingsmeals');


    //Room settings 
    
    Route::get('/roomsettings', [SettingsController::class, 'roomtypeset'])->name('roomtypesettings');
    Route::get('/roomsettings/room', [SettingsController::class, 'roomset'])->name('roomsettings');


    
    //reports settings 
    
    Route::get('/reports', [ReportsController::class, 'reports'])->name('reports');
    Route::get('/reportsview', [ReportsController::class, 'reportsview'])->name('reportsview');



    

    //Services settings 
    
    Route::get('/services', [SettingsController::class, 'services'])->name('services');
    Route::get('/category', [SettingsController::class, 'category'])->name('category');

    
    

    //Deals settings 
    
    
    // Route::resource('deals',                SettingsController::class)->only('deals', 'index');
    Route::get('/deals', [SettingsController::class, 'deals'])->name('deals');;

    
    //Department settings 
    
    Route::get('/department', [SettingsController::class, 'department'])->name('department');



    //Revenue Management
    Route::get('/revenue', [RevenueController::class, 'index'])->name('revenue');
    Route::get('/revenue/settings', [RevenueController::class, 'settings'])->name('revenue');
    Route::get('/revenue/newcashbook', [RevenueController::class, 'newcashbook'])->name('newcashbook.revenue');
    Route::get('/revenue/view', [RevenueController::class, 'view'])->name('view.revenue');
    Route::get('/revenue/details/{id}', [RevenueController::class, 'details'])->name('details.cashbook');
    Route::post('/process-cashbook', [RevenueController::class, 'newcashbooksave'])->name('newcb.revenue');



    
    // Route::resource('inventory',               InventoryController::class)->only('index', 'inventory');    
    Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');
    Route::get('/inventorytype', [InventoryController::class, 'inventory'])->name('inventorytype');

    Route::get('/bookings', [BookingsController::class, 'index'])->name('bookings');
    Route::get('/support', [SupportController::class, 'index'])->name('support');
    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
    Route::get('/food', [FoodController::class, 'index'])->name('food');


    Route::resource('users',                UserController::class)->only('index', 'show');
    Route::resource('staff',                StaffController::class)->only('index', 'show');
    Route::resource('reservations',         ReservationController::class)->only('index', 'show', 'create');
});
