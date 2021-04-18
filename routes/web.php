<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/page/company', [\App\Http\Controllers\HomeController::class, 'company'])->name('home.company');
Route::get('/page/support', [\App\Http\Controllers\HomeController::class, 'support'])->name('home.support');
Route::get('/page/contacts', [\App\Http\Controllers\HomeController::class, 'contacts'])->name('home.contacts');
