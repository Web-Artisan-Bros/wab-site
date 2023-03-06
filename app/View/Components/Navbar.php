<?php

namespace App\View\Components;

use App\Traits\LocalizedRoutesName;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\View\Component;

class Navbar extends Component {
  use LocalizedRoutesName;
  
  public array $menuEntries;
  public $theme;
  
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($theme = 'light') {
    $this->menuEntries = $this->addLocalizationToNames(config('menuEntries'));
    $this->theme = $theme;
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return View
   */
  public function render(): View {
    return view('components.navbar');
  }
}
