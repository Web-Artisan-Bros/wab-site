<?php

namespace App\Providers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class GlobalHelperProvider extends ServiceProvider {
  /**
   * Register services.
   *
   * @return void
   */
  public function register() {
  }
  
  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot() {
    //
  }
  
  public static function localizeUrl($locale) {
    $currentLocale = app()->getLocale();
    $currRoute     = Route::getCurrentRoute();
    $newName       = str_replace(app()->getLocale() . ".", $locale . ".", $currRoute->getName());
    $newPath       = route($newName, [], false);
    
    $newLocale = $locale !== "it" ? $locale . "." : "";
    $isLocal   = Str::contains(Request::getHost(), "local.");
    
    if ($isLocal) {
      $newLocale = "local." . $newLocale;
    }
    
    $newUrl = [Request::isSecure() ? "https://" : "http://", $newLocale, env('APP_DOMAIN'), $newPath];
    
    return implode("", $newUrl);
  }
}
