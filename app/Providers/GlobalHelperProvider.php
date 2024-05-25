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
    $newLocale = $locale !== "it" ? $locale . "." : "";
    
    if ($currRoute) {
      $currParams = $currRoute->parameters();
      $newName = str_replace(app()->getLocale() . ".", $locale . ".", $currRoute->getName());
      
      if (Route::has($newName)) {
        $newPath = route($newName, $currParams, false);
      }
      
      $isLocal = Str::contains(Request::getHost(), "local.");
      
      if ($isLocal) {
        $newLocale = "local." . $newLocale;
      }
    }else {
      $newPath   = "/";
    }
  
    $newUrl = [Request::isSecure() ? "https://" : "http://", $newLocale, config('app.domain'), $newPath];
    
    return implode("", $newUrl);
  }
}
