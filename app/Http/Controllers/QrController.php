<?php

namespace App\Http\Controllers;

use App\Models\Qr;
use Illuminate\Http\Request;

class QrController extends Controller {
  public function show($slug) {
    $qr         = Qr::where("slug", $slug)->with("type")->firstOrFail();
    $jsonData   = $qr->data;
    $redirectTo = '';
    
    switch ($qr->type->name) {
      case (\App\Enums\QrType::URL->value):
        $redirectTo = $jsonData['url'] ?? '';
        break;
      case (\App\Enums\QrType::TEXT->value):
        $redirectTo = $jsonData['text'] ?? '';
        break;
    }

    return redirect($redirectTo);
  }
}
