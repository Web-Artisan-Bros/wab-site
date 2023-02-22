<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BorderedImage extends Component {
  public string $src;
  public string $alt;
  public string $imgClass;
  
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($src, $alt = null, $imgClass = '') {
    $this->src = $src;
    $this->alt = $alt;
    $this->imgClass = $imgClass;
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.bordered-image');
  }
}
