<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SvgIcon extends Component {
  public $name;
  
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($icon, public $size = null) {
    $this->name = $icon;
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    try {
      $fileContent = file_get_contents(public_path('assets/' . $this->name . '.svg'));
      
      return view('components.svg-icon', [
        'fileContent' => $fileContent
      ]);
    } catch (\Exception $e) {
      return '';
    }
  }
}
