<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class Jumbo extends Component {
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(public $theme = 'light', public $reverse = false) {
  
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.jumbo');
  }
}
