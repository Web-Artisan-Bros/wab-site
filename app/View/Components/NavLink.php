<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{
  public $href;
  // public $aria;
  // public $classNav;
  public $logo;
  public $background;
  // public $highlight;




  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($href = '',  $background, $logo,)
  {
    $this->href = $href;
    // $this->classNav = $classNav; 
    // $this->aria = $aria;  
    $this->logo = $logo;
    $this->background = $background;
    // $this->highlight = $highlight;

  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.navlink');
  }
}
