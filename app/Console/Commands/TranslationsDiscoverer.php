<?php

namespace App\Console\Commands;

use App\Console\Classes\TranslationScanner;
use App\Models\LanguageLine;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class TranslationsDiscoverer extends Command {
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'localize:store';
  
  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Scan for translations and store them in the database.';
  
  /**
   * Execute the console command.
   *
   * @return int
   */
  public function handle() {
    $translations = $this->scanFiles();
    $updatedIds   = [];
    
    // For each key, store the translation in the database
    foreach ($translations as $translation) {
      $line = LanguageLine::where('group', '*')
        ->where('key', $translation['key'])
        ->where(function ($query) use ($translation) {
          $query->where('path', $translation['path'])
            ->orWhereNull('path')
            ->orWhere('path', '');
        })
        ->first();
      
      $data = [
        'group'     => '*',
        'path'      => $translation['path'],
        'key'       => $translation['key'],
        'text'      => ['en' => $translation["value"], 'it' => $translation["value"], 'ro' => $translation["value"]],
        'is_custom' => false
      ];
      
      if ($line) {
        $line->update([
          'group' => '*',
          'path'  => $translation['path'],
          'key'   => $translation['key'],
          // avoid editing the text field, because it will be overwritten by the user translation
          // 'text'  => ['en' => $translation["value"], 'it' => $translation["value"], 'ro' => $translation["value"]],
        ]);
        
        $line->save();
      } else {
        $line = LanguageLine::create($data);
      }
      
      $updatedIds[] = $line->id;
    }
    
    // after saving all data, must remove from db all ids that are not present in the code with group "*"
    $deletedKeys = LanguageLine::where('group', '*')
      ->where('is_custom', false)
      ->whereNotIn('id', $updatedIds)
      ->delete();
    
    // clean cache for spatie.translation-loader
    $this->call('cache:forget', ['key' => 'spatie.translation-loader.*.en']);
    
    return Command::SUCCESS;
  }
  
  private function scanFiles() {
    // Run artisan command translation:scan
    try {
      /**
       * @var Collection $variables
       */
      $variables = app(TranslationScanner::class)->scan();
      
      $this->info('Finished scanning code base, found: ' . $variables->count() . ' variables');
      
      return $variables;
    } catch (\Exception $e) {
      $this->error($e->getMessage());
    }
  }
}
