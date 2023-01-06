<?php

namespace App\Http\Livewire;

use App\Traits\ForwardsAttributes;
use Livewire\Component;

class FormInput extends Component {
  use ForwardsAttributes;
  
  public $label;
  public $placeholder = "";
  public $type = "text";
  public $value = "ciao";
  public $name;
  
  public function render() {
    return view('livewire.form-input');
  }
  
  public function getId() {
    return $this->name . '_input';
  }
}
