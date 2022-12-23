<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;

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


//Auth::routes();

Route::get('/', [QrController::class, 'index'])->name('qr.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('banks', App\Http\Controllers\BankController::class);


Route::resource('registers', App\Http\Controllers\RegisterController::class);
