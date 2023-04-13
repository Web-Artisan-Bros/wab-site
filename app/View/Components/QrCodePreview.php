<?php

namespace App\View\Components;

use App\Models\QrType;
use Illuminate\View\Component;

class QrCodePreview extends Component {
  public QrType $type;
  public array $jsonData;
  public int $size;
  public mixed $value = '';
  
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(QrType $type, array $jsonData, int $size = 200) {
    $this->type     = $type;
    $this->jsonData = $jsonData;
    $this->size     = $size;
    
    switch ($type->name) {
      case (\App\Enums\QrType::URL->value):
        $this->value = $jsonData['url'] ?? '';
        break;
      case (\App\Enums\QrType::TEXT->value):
        $this->value = $jsonData['text'] ?? '';
        break;
    }
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.qr-code-preview');
  }
}
