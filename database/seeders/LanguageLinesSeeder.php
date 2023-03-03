<?php

namespace Database\Seeders;

use App\Models\LanguageLine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageLinesSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    // for all lines that have a group different from "*" set "is_custom" to true
    LanguageLine::where('group', '!=', '*')
      ->update(['is_custom' => true]);
  }
}
