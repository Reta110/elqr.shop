<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Auth::routes() except register
Auth::routes(['register' => false]);

Route::get('/', [QrController::class, 'index'])->name('qr.index');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/qr/generate', [QrController::class, 'generate'])->name('qr.generate');

Route::get('/qr/{id}', [QrController::class, 'show'])->name('qr.show');

//group auth middleware
Route::group(['middleware' => 'auth'], function () {
    Route::resource('banks', BankController::class);
    Route::resource('registers', RegisterController::class);
});
