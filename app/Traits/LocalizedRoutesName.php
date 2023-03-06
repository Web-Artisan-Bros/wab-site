<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait LocalizedRoutesName {
  public function addLocalizationToNames(array $routes) {
    foreach ($routes as $key => $menuEntry) {
      $skip      = ["home"];
      $routeName = $routes[$key]["routeName"];
      
      if (in_array($routeName, $skip)) {
        continue;
      }
      
      $routes[$key]["routeName"] = __(App::getLocale() . ".{$menuEntry["routeName"]}");
      
      if (isset($menuEntry["children"])) {
        $routes[$key]["children"] = $this->addLocalizationToNames($menuEntry["children"]);
      }
    }
    
    return $routes;
  }
}
