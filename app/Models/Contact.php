<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 *
 * @mixin Builder
 */
class Contact extends Model {
  use HasFactory;
  
  protected $fillable = ['name', 'email', 'phone', 'message'];
}
