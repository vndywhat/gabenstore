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
Route::get('/gift-card', [\App\Http\Controllers\HomeController::class, 'giftCard'])->name('home.gift-card');
Route::get('/basket', [\App\Http\Controllers\BasketController::class, 'index'])->name('basket.index');

Route::group(['prefix'=> 'page'], function () {
    Route::get('/company', [\App\Http\Controllers\HomeController::class, 'company'])->name('home.company');
    Route::get('/support', [\App\Http\Controllers\HomeController::class, 'support'])->name('home.support');
    Route::get('/contacts', [\App\Http\Controllers\HomeController::class, 'contacts'])->name('home.contacts');
    Route::get('/jobs', [\App\Http\Controllers\HomeController::class, 'jobs'])->name('home.jobs');
});

Route::group(['prefix' => 'documents'], function () {
    Route::get('/', [\App\Http\Controllers\DocumentController::class, 'index'])->name('document.index');
    Route::get('/agreement', [\App\Http\Controllers\DocumentController::class, 'agreement'])->name('document.agreement');
    Route::get('/Privacy-Policy', [\App\Http\Controllers\DocumentController::class, 'privacy'])->name('document.privacy');
    Route::get('/offer', [\App\Http\Controllers\DocumentController::class, 'offer'])->name('document.offer');
    Route::get('/services', [\App\Http\Controllers\DocumentController::class, 'services'])->name('document.services');
});
