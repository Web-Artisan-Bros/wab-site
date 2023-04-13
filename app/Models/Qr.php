<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read  int    $id
 * @property string       $qr_type_id
 * @property string       $title
 * @property string       $description
 * @property string       $slug
 * @property string       $data
 * @property-read  string $created_at
 * @property-read string  $updated_at
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
  
  public function type() {
    return $this->belongsTo(QrType::class, 'qr_type_id');
  }
  
  public function data(): Attribute {
    return Attribute::make(
      get: fn($value) => json_decode($value, true),
      set: fn($value) => json_encode($value)
    );
  }
  
  public static function generateSlug(): string {
    $slug = null;
    
    do {
      $slug = bin2hex(random_bytes(5));
    } while (Qr::where('slug', $slug)->exists());
    
    return $slug;
  }
}
