<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run() {
    // \App\Models\User::factory(10)->create();
    $this->call([
      FormsSeeder::class,
      EmailSeeder::class,
      LanguageLinesSeeder::class,
      RoutesLocalizationSeeder::class
    ]);
  
    if(!env("ADMIN_PASSWORD")){
      throw new \Exception("ADMIN_PASSWORD is not set in .env file");
    }
    
    if ( !User::count()) {
      User::factory()->create([
        'name'     => 'Wab Admin',
        'email'    => 'info@webartisanbros.com',
        'password' => bcrypt(env("ADMIN_PASSWORD")),
      ]);
    }
  }
}
