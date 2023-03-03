<?php

use Illuminate\Support\Facades\App;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chisiamo', [\App\Http\Controllers\ChiSiamo::class, 'index'])->name('about');
Route::get('/servizi', [\App\Http\Controllers\Servizi::class, 'index'])->name('services');
Route::get('/web', [\App\Http\Controllers\Web::class, 'index'])->name('web');
Route::get('/design', [\App\Http\Controllers\Design::class, 'index'])->name('design');
Route::get('/software', [\App\Http\Controllers\Software::class, 'index'])->name('software');
Route::get('/app', [\App\Http\Controllers\App::class, 'index'])->name('app');
Route::get('/digital', [\App\Http\Controllers\Digital::class, 'index'])->name('digital');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
  ->prefix('admin')
  ->name('admin.')
  ->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, "index"])->name('dashboard');
    Route::get("/contacts", [\App\Http\Controllers\Admin\ContactController::class, "index"])->name("contacts.index");

    Route::resource("/translations", \App\Http\Controllers\Admin\TranslationController::class);
  });

Route::get('/lang/{locale}', function (string $locale) {
  app()->setLocale($locale);
  session()->put('locale', $locale);
  
  return redirect()->back();
})->name("change-locale");
