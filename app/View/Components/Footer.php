<?php

namespace App\View\Components;

use App\Enums\Theme;
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
}
