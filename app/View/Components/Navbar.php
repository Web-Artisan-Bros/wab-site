<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component {
  public string $logo;
  public string $background;
  public string $variant;
  public array $menuEntries;
  
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($variant) {
    $this->variant     = $variant;
    $this->menuEntries = config('menuEntries');
    
    $this->setVariant();
  }
  
  private function setVariant() {
    switch ($this->variant) {
      case 'white':
        $this->logo       = 'NavLogoYB';
        $this->background = 'white-nav';
        break;
      case 'yellow':
        $this->logo       = 'NavLogoR';
        $this->background = 'yellow-nav';
        break;
      default:
        $this->logo       = 'NavLogoYW';
        $this->background = 'dark-nav';
        break;
    }
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
