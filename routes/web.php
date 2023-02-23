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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chisiamo', [App\Http\Controllers\ChiSiamo::class, 'index'])->name('about');
Route::get('/servizi', [App\Http\Controllers\Servizi::class, 'index'])->name('services');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
  ->prefix('admin')
  ->name('admin.')
  ->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, "index"])->name('dashboard');
    
    Route::resource("/translations", \App\Http\Controllers\Admin\LanguageLineController::class);
  });
