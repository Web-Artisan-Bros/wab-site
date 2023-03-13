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


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
  ->prefix('admin')
  ->name('admin.')
  ->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, "index"])->name('dashboard');
    Route::get("/contacts", [\App\Http\Controllers\Admin\ContactController::class, "index"])->name("contacts.index");
    
    Route::resource("/translations", \App\Http\Controllers\Admin\TranslationController::class);
  });

Route::get('/lang/{locale}', function (string $locale, \Illuminate\Http\Request $request) {
  // get the destination route from where the user comes
  $currentPage = url()->previousPath();
  // from the previous path get the relative route name
  $prevRouteName = Route::getRoutes()->match(app('request')->create($currentPage))->getName();
  $newRouteName  = str_replace(app()->getLocale() . ".", $locale . ".", $prevRouteName);
  
  $newPath = route($newRouteName, [], false);
  $newUrl = [env("APP_DOMAIN"), $newPath];
  
  dump($newUrl);
  dd("");

//  app()->setLocale($locale);
//  session()->put('locale', $locale);
//  session()->put('localeManualChange', true);

//  return redirect()->back();
})->name("change-locale");
