<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TontineController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TontineurController;

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

    Route::get('/', [AuthController::class, 'login'])->name('user.login');

    Route::post('/login', [AuthController::class, 'loginPost'])->name('user.login.post');
    
    Route::group(['middleware' => 'auth'], function() {
        Route::group(['prefix' => 'dashboard-faso-tontine'], function() {

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('logout', [DashboardController::class, 'logout'])->name('dashboard.logout');
        // Tontine 
        Route::get('tontine/index', [TontineController::class , 'index'])->name('tontine.index');
        Route::get('tontine/create', [TontineController::class , 'create'])->name('tontine.create');
        Route::post('tontine/store', [TontineController::class , 'store'])->name('tontine.store');
        // Participants 
        Route::get('tontineurs/index', [TontineurController::class , 'index'])->name('tontineurs.index');
        Route::get('tontineurs/create', [TontineurController::class , 'create'])->name('tontineurs.create');
        Route::post('tontineurs/store', [TontineurController::class , 'store'])->name('tontineurs.store');
      });

    });
