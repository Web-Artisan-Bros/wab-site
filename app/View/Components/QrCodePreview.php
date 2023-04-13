<?php

namespace App\View\Components;

use App\Models\QrType;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodePreview extends Component {
  public mixed $value = '';
  public array $formats = [];
  /**
   * @var array|mixed
   * @see https://www.simplesoftware.io/#/docs/simple-qrcode
   */
  protected mixed $settings = [
    "errorCorrection" => "L", // L, M, Q, H
    "size"            => 200,
    "merge"           => null,
    "margin"          => "2",
    "style"           => "square",
    "eyeStyle"        => "square",
    "color"           => "rgb(0,0,0)",
    "bgColor"         => "rgba(255,255,255, 0)",
    "eyeColor0Inner"  => "rgb(0,0,0)",
    "eyeColor0Outer"  => "rgb(0,0,0)",
    "eyeColor1Inner"  => "rgb(0,0,0)",
    "eyeColor1Outer"  => "rgb(0,0,0)",
    "eyeColor2Inner"  => "rgb(0,0,0)",
    "eyeColor2Outer"  => "rgb(0,0,0)"
  ];
  
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(public QrType $type, public array $jsonData, public string $slug) {
    $this->settings = array_merge($this->settings, ($jsonData['settings'] ?? []));
    
    $this->value = url("/qr/{$slug}");
    
    $this->generateCode();
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.qr-code-preview');
  }
  
  
  private function generateCode() {
    $instance = QrCode::size($this->settings["size"]);
    
    // Main colors
    if ($this->settings["color"])
      $instance->color(...$this->parseColor($this->settings["color"]));
    
    if ($this->settings["bgColor"])
      $instance->backgroundColor(...$this->parseColor($this->settings["bgColor"]));
    
    // Styles
    if ($this->settings["style"])
      $instance->style($this->settings["style"]);
    
    if ($this->settings["eyeStyle"])
      $instance->eye($this->settings["eyeStyle"]);
    
    // Eye colors
    if ($this->settings["eyeColor0Inner"] || $this->settings["eyeColor0Outer"])
      $instance->eyeColor(0, ...$this->parseColor($this->settings["eyeColor0Outer"], false), ...$this->parseColor($this->settings["eyeColor0Inner"], false));
    
    if ($this->settings["eyeColor1Inner"] || $this->settings["eyeColor1Outer"])
      $instance->eyeColor(1, ...$this->parseColor($this->settings["eyeColor1Outer"], false), ...$this->parseColor($this->settings["eyeColor1Inner"], false));
    
    if ($this->settings["eyeColor2Inner"] || $this->settings["eyeColor2Outer"])
      $instance->eyeColor(2, ...$this->parseColor($this->settings["eyeColor2Outer"], false), ...$this->parseColor($this->settings["eyeColor2Inner"], false));
    
    if ($this->settings["margin"])
      $instance->margin($this->settings["margin"]);
    
    if ($this->settings["merge"]) {
      $instance->errorCorrection("H");
      
      $instance->mergeString(Storage::get($this->settings["merge"]), .3);
    }
    
    
    $this->formats["svg"] = $instance->generate($this->value);
    $this->formats["png"] = $instance->format('png')->generate($this->value);
    
    $this->formats["svg64"] = "data:image/svg+xml;base64, " . base64_encode($this->formats["svg"]);
    $this->formats["png64"] = "data:image/png;base64, " . base64_encode($this->formats["png"]);
  }
  
  public function parseColor(string $color, bool $aplha = true): array {
    // from the rgba string, get the numbers
    preg_match_all('/\d+/', $color, $matches);
    
    $values = $matches[0] ?? [];
    
    if (count($values) === 4) {
      $values[3] = $values[3] * 100;
    }
    
    if ( !$aplha && count($values) === 4) {
      array_pop($values);
    }
    
    
    return $values;
  }
}
