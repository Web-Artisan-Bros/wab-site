<?php

namespace App\Http\Requests;

use App\Models\Qr;
use App\Models\QrType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QrUpsertRequest extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return true;
  }
  
  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules(Request $request) {
    $qrTypeId         = $request->get('qr_type_id');
    $qrSettingsFields = Qr::settingFields();
    
    $rules = [
      "slug"        => [
        'required',
        Rule::unique('qrs', "slug")->ignore($request->get('slug'), "slug")
      ],
      "title"       => 'required|max:255',
      "description" => 'required|max:255',
      "qr_type_id"  => 'required|exists:qr_types,id',
      "data"        => 'required',
    ];
    
    if ($qrTypeId) {
      $qrType = QrType::find($qrTypeId);
      
      if ($qrType) {
        foreach ($qrType->fields as $field) {
          $rules["data." . $field->name] = $field->validation;
        }
      }
    }
    
    foreach ($qrSettingsFields as $field) {
      $path = ["data", "settings", $field["name"]];
      
      if (isset($field["validation"])) {
        $rules[implode(".", $path)] = $field["validation"];
      }
    }
    
    return $rules;
  }
}
