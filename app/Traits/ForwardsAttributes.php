<?php

namespace App\Traits;

trait ForwardsAttributes {
  public $attributes;
  
  public function mount(...$attrs) {
    $this->mapAttributes(...$attrs);
  }
  
  public function mapAttributes(...$attrs) {
    $attributes = '';
    collect(...$attrs)->each(function ($value, $attr) use (&$attributes) {
      $attributes .= " {$attr}=\"{$value}\"";
    });
    $this->attributes = $attributes;
  }
}
