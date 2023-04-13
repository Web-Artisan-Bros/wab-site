<?php

namespace App\View\Components;

use Illuminate\View\Component;
use \Illuminate\Support\Collection;

class FormFieldsGenerator extends Component {
  public Collection $groups;
  public Collection $prefix;
  public string $prefixName;
  
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(public array $fields, public mixed $values, string $prefix = '') {
    $this->groups = collect($fields)->groupBy(fn($field) => $field['group'] ?? 'default');
    
    $this->prefix = collect(explode('.', $prefix));
    
    $this->prefixName = $this->prefix->map(fn($item, $i) => $i > 0 ? "[$item]" : $item)->implode('');
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.form-fields-generator');
  }
  
  public function getName(string $name) {
    $parts = [];
    
    if ($this->prefixName) {
      $parts[] = $this->prefix->map(fn($item, $i) => $i > 0 ? "[$item]" : $item)->implode('');
      $parts[] = "[$name]";
    } else {
      $parts[] = $name;
    }
    
    return implode('', $parts);
  }
  
  public function getId(string $name) {
    $parts = ["field"];
    
    if ($this->prefix) {
      $parts = array_merge($parts, $this->prefix->toArray());
    }
    
    $parts[] = $name;
    
    return implode("_", $parts);
  }
  
  public function getPath(string $name) {
    $parts = [];
    
    if ($this->prefix) {
      $parts = array_merge($parts, $this->prefix->toArray());
    }
    
    $parts[] = $name;
    
    return implode(".", $parts);
  }
}
