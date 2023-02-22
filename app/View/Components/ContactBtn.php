<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContactBtn extends Component {
  /**
   * @var string $theme light|dark|yellow
   */
  public string $theme;
  
  /**
   * @var string $version large|small
   */
  public string $version;
  
  /**
   * @var mixed $reverse reverse the order of the icon and text for the large version
   */
  public mixed $reverse;
  
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($theme = 'dark', $version = 'large', $reverse = null) {
    $this->theme   = $theme;
    $this->version = $version;
    $this->reverse = $reverse;
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.contact-btn');
  }
}
