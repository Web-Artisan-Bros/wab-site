<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @property-read string $id
 * @property string      $name
 * @property string      $description
 * @property string      $fields
 * @property-read string $created_at
 * @property-read string $updated_at
 *
 * @mixin Builder
 */
class QrType extends Model {
  use HasFactory;
  
  protected function qrs() {
    return $this->hasMany(Qr::class);
  }
  
  public function getFieldsAttribute($value) {
    return json_decode($value);
  }
}
