<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Spatie\TranslationLoader\LanguageLine;

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
    // Run artisan command translation:scan
    $this->call('translation:scan');
    
    // Read the json file
    $translations = json_decode(file_get_contents(app_path('../lang/en.json')), true);
    
    // For each key, store the translation in the database
    foreach ($translations as $key => $translation) {
      // create only if not exists
      LanguageLine::firstOrCreate([
        'group' => '*',
        'key'   => $key,
      ], [
        'group' => '*',
        'key'   => $key,
        'text'  => ['en' => $translation],
      ]);
    }
    
    // clean cache for spatie.translation-loader
    $this->call('cache:forget', ['key' => 'spatie.translation-loader.*.en']);
    
    return Command::SUCCESS;
  }
}
