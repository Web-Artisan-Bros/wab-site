<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SettingsFab extends Component {
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(public $theme = 'dark') {
    //
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.settings-fab');
  }
}
