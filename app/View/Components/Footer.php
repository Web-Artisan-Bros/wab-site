<?php

namespace App\View\Components;

use App\Enums\Theme;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Footer extends Component {
  public Theme $theme;
  
  
  /**
   * Create a new component instance.
   *
   * @param  string  $theme
   */
  public function __construct(string $theme) {
    $this->theme = Theme::from($theme);
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Closure|\Illuminate\Contracts\View\View|string
   */
  public function render() {
    return view('components.footer');
  }
  
  public function localizeUrl($locale) {
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
