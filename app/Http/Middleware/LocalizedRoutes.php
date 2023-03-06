<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizedRoutes {
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request                                                                           $request
   * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
   *
   * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
   */
  public function handle(Request $request, Closure $next) {
    //    $availableLocales = collect(config('app.validLocales'));
    
    /*
     * We need to check the user language
     * them we check the route name language
     * finally if the route name language is not the same as the user language we redirect to the correct route
     */
    
    $userLang    = $request->session()->get("locale");
    $routeName   = $request->route()->getName();
    $requestLang = explode(".", $routeName)[0];
    
    if ($userLang !== $requestLang) {
      $routeName = str_replace($requestLang . ".", $userLang . ".", $routeName);
      
      return redirect()->route($routeName);
    }
    
    return $next($request);
  }
}
