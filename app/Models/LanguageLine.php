<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use function PHPUnit\Framework\isEmpty;

// Model extracted from Spatie\TranslationLoader\LanguageLine

/**
 * @property int    $id
 * @property string $group
 * @property string $key
 * @property string $text
 * @property string $path
 *
 * @mixin Builder
 */
class LanguageLine extends \Spatie\TranslationLoader\LanguageLine {
  /** @var array */
  public $translatable = ['text'];
  
  /** @var array */
  public $guarded = ['id'];
  
  /** @var array */
  protected $casts = ['text' => 'array'];
  
  protected $fillable = ['group', 'key', 'text', 'path', 'is_custom'];
  
  public static function boot() {
    parent::boot();
    
    $flushGroupCache = function (self $languageLine) {
      $languageLine->flushGroupCache();
    };
    
    self::creating(function ($model) {
      // if is_custom is not set, set it to true
      if ( !isset($model['is_custom'])) {
        $model->is_custom = true;
      }
    });
    
    static::saved($flushGroupCache);
    static::deleted($flushGroupCache);
  }
  
  public static function getTranslationsForGroup(string $locale, string $group): array {
    return Cache::rememberForever(static::getCacheKey($group, $locale), function () use ($group, $locale) {
      return static::query()
        ->where('group', $group)
        ->get()
        ->reduce(function ($lines, self $languageLine) use ($group, $locale) {
          $translation = $languageLine->getTranslation($locale);
          
          if ($translation !== null && $group === '*') {
            // Make a flat array when returning json translations
            $lines[$languageLine->key] = $translation;
          } elseif ($translation !== null && $group !== '*') {
            // Make a nested array when returning normal translations
            Arr::set($lines, $languageLine->key, $translation);
          }
          
          return $lines;
        }) ?? [];
    });
  }
  
  public static function getCacheKey(string $group, string $locale): string {
    return "spatie.translation-loader.{$group}.{$locale}";
  }
  
  /**
   * @param  string  $locale
   *
   * @return string
   */
  public function getTranslation(string $locale): ?string {
    if ( !isset($this->text[$locale])) {
      $fallback = config('app.fallback_locale');
      
      return $this->text[$fallback] ?? null;
    }
    
    return $this->text[$locale];
  }
  
  /**
   * @param  string  $locale
   * @param  string  $value
   *
   * @return $this
   */
  public function setTranslation(string $locale, string $value) {
    $this->text = array_merge($this->text ?? [], [$locale => $value]);
    
    return $this;
  }
  
  public function flushGroupCache() {
    foreach ($this->getTranslatedLocales() as $locale) {
      Cache::forget(static::getCacheKey($this->group, $locale));
    }
  }
  
  protected function getTranslatedLocales(): array {
    return array_keys($this->text);
  }
}
