<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Accordion extends Component
{
  public $theme;
  public $entries = [];

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($entries, $theme = 'light')
  {
    $this->entries = $entries;
    $this->theme = $theme;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.accordion');
  }
}
