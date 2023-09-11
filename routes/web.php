<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NamatokoController;
use App\Http\Controllers\SettingController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('guest')->group(
    function () {
        Route::controller(AuthController::class)->prefix('auth')->group(function () {
            Route::get('/login', function () {
                return view('pages.login');
            })->name('login');
            Route::get('/register', function () {
                return view('pages.register');
            })->name('register');
            Route::post('/login', 'loginProcess')->name('loginProcess');
            Route::post('/register', 'registerProcess')->name('registerProcess');
        });
    }
);

Route::middleware('auth')->group(
    function () {
        Route::controller(AuthController::class)->prefix('auth')->group(function () {
            Route::get('/logout', 'logout')->name('logout');
            Route::post('update', 'updateUser')->name('updateUser');
        });
        Route::controller(DashboardController::class)->prefix('dashboard')->group(
            function () {
                Route::get('/', 'dashboard')->name('dashboard');
            }
        );
        Route::controller(SettingController::class)->prefix('setting')->group(
            function () {
                Route::get('/', 'index')->name('setting');
            }
        );
        Route::controller(NamatokoController::class)->prefix('toko')->group(
            function () {
                Route::get('/', 'index')->name('toko');
                Route::post('/', 'store')->name('toko/add');
                Route::get('/edit/{namatoko}', 'edit')->name('toko/edit');
                Route::put('/update/{namatoko}', 'update')->name('toko/update');
                Route::delete('/delete/{namatoko}', 'destroy')->name('toko/delete');
            }
        );
    }
);
