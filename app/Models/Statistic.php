<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class Statistic extends Model {
  use HasFactory;
  
  protected $fillable = [
    "route_name",
    "route_uri",
    "route_host",
    "route_method",
    "route_query",
    "route_params",
    "payload",
    "ip",
    "user_agent",
    "referer",
    "country",
    "city",
    "latitude",
    "longitude",
    "timezone",
  ];
  
  public static function booted() {
    static::creating(function ($statistic) {
      $statistic->fill([
        "ip"           => request()->ip(),
        "route_name"   => request()->route()->getName() ?? request()->getRequestUri(),
        "route_host"   => request()->getHost(),
        "route_uri"    => request()->getRequestUri(),
        "route_method" => request()->getMethod(),
        "route_query"  => request()->getQueryString(),
        "route_params" => request()->route()->parameters,
        "payload"      => request()->except("ipinfo", "password"),
        "user_agent"   => request()->userAgent(),
        "referer"      => request()->headers->get('referer'),
        "country"      => request()->ipInfo['country_name'] ?? '',
        "city"         => request()->ipInfo['city'] ?? '',
        "latitude"     => request()->ipInfo['latitude'] ?? '',
        "longitude"    => request()->ipInfo['longitude'] ?? '',
        "timezone"     => request()->ipInfo['timezone'] ?? '',
      ]);
    });
    
  }
  
  public function routeQuery(): Attribute {
    return Attribute::make(
      get: fn($value) => json_decode($value, true),
      set: fn($value) => json_encode($value)
    );
  }
  
  public function routeParams(): Attribute {
    return Attribute::make(
      get: fn($value) => json_decode($value, true),
      set: fn($value) => json_encode($value)
    );
  }
  
  public function payload(): Attribute {
    return Attribute::make(
      get: fn($value) => json_decode($value, true),
      set: fn($value) => json_encode($value)
    );
  }
}
