<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class Localization {
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request                                                                           $request
   * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
   *
   * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
   */
  public function handle(Request $request, Closure $next) {
    $domain = $request->getHost();
  
    if (Str::contains($domain, ["locale.en.", "en."])) {
      $locale = 'en';
    } elseif (Str::contains($domain, ["locale.ro.", "ro."])) {
      $locale = 'ro';
    } else {
      $locale = "it";
    }
  
    $sessionLocale = $request->session()->has('locale');
  
    // if no language is stored in the session, set the language based on the domain
    if ( !$sessionLocale) {
      app()->setLocale($locale);
      session()->put('locale', $locale);
    } elseif ($sessionLocale !== $locale) { // if the stored language is different from the domain language, change the language
      app()->setLocale($locale);
      session()->put('locale', $locale);
    }
    return $next($request);
  
    /*if ($request->session()->has('locale')) {
      App::setLocale($request->session()->get('locale'));
    }
  
    return $next($request);*/
  }
}
