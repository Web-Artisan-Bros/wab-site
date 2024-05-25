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

foreach (config('app.validLocales') as $locale) {
  $langCode = $locale["code"];
  
  Route::name($langCode . ".")
    ->group(function () use ($langCode) {
      
      Route::get('/' . trans('routes.chisiamo', [], $langCode), [\App\Http\Controllers\ChiSiamo::class, 'index'])->name('about');
      Route::get('/' . trans('routes.web', [], $langCode), [\App\Http\Controllers\Web::class, 'index'])->name('web');
      Route::get('/' . trans('routes.design', [], $langCode), [\App\Http\Controllers\Design::class, 'index'])->name('design');
      Route::get('/' . trans('routes.software', [], $langCode), [\App\Http\Controllers\Software::class, 'index'])->name('software');
      Route::get('/' . trans('routes.app', [], $langCode), [\App\Http\Controllers\App::class, 'index'])->name('app');
      Route::get('/' . trans('routes.digital', [], $langCode), [\App\Http\Controllers\Digital::class, 'index'])->name('digital');
    });
}

Route::get('/team/{name}', [\App\Http\Controllers\TeamController::class, "show"])->name("team.show");
Route::get('/team/{name}/vcard', [\App\Http\Controllers\TeamController::class, "vcard"])->name("team.vcard");

Route::get("qrs/{slug}", [\App\Http\Controllers\QrController::class, "show"])->name("qrs.show");


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
  ->prefix('admin')
  ->name('admin.')
  ->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, "index"])->name('dashboard');
    Route::get("/contacts", [\App\Http\Controllers\Admin\ContactController::class, "index"])->name("contacts.index");
    
    Route::resource("/translations", \App\Http\Controllers\Admin\TranslationController::class);
    
    Route::post("/qrs/fields", [\App\Http\Controllers\Admin\QrController::class, "fields"])->name("qrs.fields");
    Route::resource("/qrs", \App\Http\Controllers\Admin\QrController::class);
  });

Route::get('/OuPeB9lY56GhLfye8B/mailable/ContactAdminNotify', function () {
  $contact = \App\Models\Contact::first();
  
  return new \App\Mail\ContactAdminNotify($contact);
});

Route::get('/OuPeB9lY56GhLfye8B/mailable/ContactClientReview', function () {
  $contact = \App\Models\Contact::first();
  
  return new \App\Mail\ContactClientReview($contact);
});
