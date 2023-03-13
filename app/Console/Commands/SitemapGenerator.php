<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapGenerator extends Command {
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'sitemap:generate';
  
  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Generate sitemap.xml';
  
  /**
   * Execute the console command.
   *
   * @return int
   */
  public function handle() {
    $rootUrl = "https://" . env("APP_DOMAIN");
    $domain = env("APP_DOMAIN");
//    $routes = Route::getRoutes();
    
    $sitemap = Sitemap::create();
    $routes  = [
      "about"    => ["en", "ro"],
      "web"      => ["en", "ro"],
      "design"   => ["en", "ro"],
      "software" => ["en", "ro"],
      "app"      => ["en", "ro"],
      "digital"  => ["en", "ro"],
    ];
    
    $sitemap->add(Url::create("https://$domain")
      ->addAlternate("https://en.$domain", "en")
      ->addAlternate("https://ro.$domain", "ro")
    );
    
    foreach ($routes as $name => $otherLangs) {
      $routeName = count($otherLangs) > 0 ? ("it." . $name) : $name;
      $url       = Url::create($rootUrl . route($routeName, [], false));
      
      if (count($otherLangs) > 0) {
//        $url->setPriority(1);
        foreach ($otherLangs as $otherLang) {
          $url->addAlternate("https://$otherLang.$domain" . route($otherLang . "." . $name, [], false), $otherLang);
        }
      }
      
      $sitemap->add($url);
    }
    
    $sitemap->writeToFile(public_path('sitemap.xml'));
    /*Sitemap::create()
      ->add("https://local.webartisanbors.com" . route('home', [], false))
      ->add(Url::create(route('it.about', [], false))->setPriority(1)
        ->addAlternate(route('en.about', [], false), 'en')
        ->addAlternate(route('ro.about', [], false), 'ro'))
      // here we add one extra link, but you can add as many as you'd like
//      ->add(Url::create('/extra-page')->setPriority(0.5)->addAlternate('/extra-pagina', 'nl'))
      ->writeToFile(public_path('sitemap.xml'));*/

//    dump($routes);
    return Command::SUCCESS;
  }
}
