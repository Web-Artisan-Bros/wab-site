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

Route::get('/team/{slug}', [\App\Http\Controllers\TeamController::class, "show"])->name("team.show");

Route::get("qrs/{slug}", [\App\Http\Controllers\QrController::class, "show"])->name("qrs.show");

Route::get('/download/vcard', function () {
  $vcard = "BEGIN:VCARD\r\nVERSION:3.0\r\nFN:Leica Florian Robert\r\nORG:Web Artisan Bros\r\nTITLE:Web Developer\r\nTEL:+393202942127\r\nEMAIL:florian.leica@webartisanbros.com\r\nURL:http://www.webartisanbros.com/\r\nPHOTO;MEDIATYPE=image/jpeg:/assets/florian_square/\r\nEND:VCARD\r\n";
  $headers = [
    'Content-Type' => 'text/x-vcard',
    'Content-Disposition' => 'attachment; filename="Leica Florian Robert.vcf"',
  ];
  return response()->streamDownload(function () use ($vcard) {
    echo $vcard;
  }, 'Leica Florian Robert.vcf', $headers);
})->name('download.vcard');


Route::get('/download/mariusvcard', function () {
  $vcard = "BEGIN:VCARD\r\nVERSION:3.0\r\nFN:Leica Marius\r\nORG:Web Artisan Bros\r\nTITLE:CEO\r\nTEL:+393290241530\r\nEMAIL:marius.leica@webartisanbros.com\r\nURL:http://www.webartisanbros.com/\r\nPHOTO;MEDIATYPE=image/jpeg:/assets/marius_square.png/\r\nEND:VCARD\r\n";
  return response()->streamDownload(function () use ($vcard) {
    echo $vcard;
  }, 'Leica Marius.vcf');
})->name('download.mariusvcard');



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
