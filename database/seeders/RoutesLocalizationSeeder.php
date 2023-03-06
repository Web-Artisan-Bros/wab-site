<?php

namespace Database\Seeders;

use App\Models\LanguageLine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoutesLocalizationSeeder extends Seeder {
  /**
   * E' importante che l'url non sia mai uguale a quello di un altra lingua
   * @var array[]
   */
  private $routes = [
    'chisiamo' => ["en" => "about", "it" => "chi-siamo", "ro" => "cine-suntem"],
    'servizi'  => ["en" => "services", "it" => "servizi", "ro" => "servicii"],
    'web'      => ["en" => "web-development", "it" => "sviluppo-web", "ro" => "dezvoltare-web"],
    'design'   => ["en" => "digital-design-en", "it" => "digital-design-it", "ro" => "digital-design-ro"],
    'software' => ["en" => "software-development", "it" => "sviluppo-software", "ro" => "dezvoltare-software"],
    'app'      => ["en" => "mobile-app-development", "it" => "sviluppo-app-mobile", "ro" => "dezvoltare-app-mobil"],
    'digital'  => ["en" => "digital-transformation", "it" => "sviluppo-digitale", "ro" => "transformare-digitala"],
  ];
  
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    foreach ($this->routes as $key => $values) {
      LanguageLine::updateOrCreate([
        'group' => "routes",
        'key'   => $key,
      ], [
        'group' => "routes",
        'key'   => $key,
        'text'  => $values,
      ]);
    }
  }
}
