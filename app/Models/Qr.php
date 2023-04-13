<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property-read  int    $id
 * @property string       $qr_type_id
 * @property string       $title
 * @property string       $description
 * @property string       $slug
 * @property array        $data
 * @property-read  string $created_at
 * @property-read string  $updated_at
 *
 * @property-read mixed   $qrSettings
 * @property-read QrType  $type
 *
 * @mixin Builder
 */
class Qr extends Model {
  use HasFactory;
  
  protected $fillable = [
    'qr_type_id',
    'title',
    'description',
    'slug',
    'data',
  ];
  
  public function type(): \Illuminate\Database\Eloquent\Relations\BelongsTo {
    return $this->belongsTo(QrType::class, 'qr_type_id');
  }
  
  public function qrSettings(): Attribute {
    return Attribute::make(
      get: fn($value) => $this->data["settings"] ?? [],
    );
  }
  
  public function data(): Attribute {
    return Attribute::make(
      get: fn($value) => json_decode($value, true),
      set: fn($value) => json_encode($value)
    );
  }
  
  public function statistics() {
    return $this->where("route_name", "qr.show")->where("route_uri", "qr/{$this->slug}");
  }
  
  public static function generateSlug(): string {
    $slug = null;
    
    do {
      $slug = bin2hex(random_bytes(5));
    } while (Qr::where('slug', $slug)->exists());
    
    return $slug;
  }
  
  public static function settingFields() {
    return [
      [
        "name"        => "size",
        "type"        => "number",
        "label"       => "Dimensione (PX)",
        "placeholder" => "",
        "validation"  => "int",
        "default"     => "200",
        "group"       => "spacing"
      ],
      [
        "name"        => "margin",
        "type"        => "number",
        "label"       => "Margine (PX)",
        "placeholder" => "",
        "validation"  => "int",
        "default"     => "2",
        "group"       => "spacing"
      ],
      [
        "name"        => "color",
        "type"        => "color",
        "label"       => "Colore",
        "default"     => "rgb(0,0,0)",
        "placeholder" => "",
        "validation"  => "string",
        "group"       => "color"
      ],
      [
        "name"        => "bgColor",
        "type"        => "color",
        "label"       => "Colore di sfondo",
        "default"     => "rgb(0,0,0, 0)",
        "placeholder" => "",
        "validation"  => "string",
        "group"       => "color"
      ],
      [
        "name"        => "eyeColor0Outer",
        "type"        => "color",
        "label"       => "Colore quadrato 0 (Esterno)",
        "default"     => "rgb(0,0,0)",
        "placeholder" => "",
        "validation"  => "string",
        "group"       => "eyeColor0"
      ],
      [
        "name"        => "eyeColor0Inner",
        "type"        => "color",
        "label"       => "Colore quadrato 0 (Interno)",
        "default"     => "rgb(0,0,0)",
        "placeholder" => "",
        "validation"  => "string",
        "group"       => "eyeColor0"
      ],
      [
        "name"        => "eyeColor1Outer",
        "type"        => "color",
        "label"       => "Colore quadrato 1 (Esterno)",
        "default"     => "rgb(0,0,0)",
        "placeholder" => "",
        "validation"  => "string",
        "group"       => "eyeColor1"
      ],
      [
        "name"        => "eyeColor1Inner",
        "type"        => "color",
        "label"       => "Colore quadrato 1 (Interno)",
        "default"     => "rgb(0,0,0)",
        "placeholder" => "",
        "validation"  => "string",
        "group"       => "eyeColor1"
      ],
      [
        "name"        => "eyeColor2Outer",
        "type"        => "color",
        "label"       => "Colore quadrato 2 (Esterno)",
        "default"     => "rgb(0,0,0)",
        "placeholder" => "",
        "validation"  => "string",
        "group"       => "eyeColor2"
      ],
      [
        "name"        => "eyeColor2Inner",
        "type"        => "color",
        "label"       => "Colore quadrato 2 (Interno)",
        "default"     => "rgb(0,0,0)",
        "placeholder" => "",
        "validation"  => "string",
        "group"       => "eyeColor2"
      ],
      [
        "name"        => "eyeStyle",
        "type"        => "select",
        "label"       => "Stile Quadrati (Interno)",
        "placeholder" => "",
        "validation"  => "string",
        "options"     => [
          [
            "value" => "square",
            "label" => "Squadrato"
          ],
          [
            "value" => "circle",
            "label" => "Arrotondato"
          ],
        ],
        "default"     => "round",
        "group"       => "style"
      ],
      [
        "name"        => "style",
        "type"        => "select",
        "label"       => "Stile",
        "placeholder" => "",
        "validation"  => "string",
        "options"     => [
          [
            "value" => "square",
            "label" => "Squadrato"
          ],
          [
            "value" => "dot",
            "label" => "Puntato"
          ],
          [
            "value" => "round",
            "label" => "Arrotondato"
          ]
        ],
        "default"     => "round",
        "group"       => "style"
      ],
      [
        "name"         => "merge",
        "type"         => "file",
        "label"        => "Logo",
        "placeholder"  => "",
        "validation"   => "nullable|image:jpeg,png,jpg|max:2048",
        "inputOptions" => [
          "accept" => "image/.jpeg,.png,.jpg"
        ],
      ]
    ];
  }
}
