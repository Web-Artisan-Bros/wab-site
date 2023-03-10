<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('language_lines', function (Blueprint $table) {
      $table->string('path')->nullable()->after("key");
      $table->boolean('is_custom')->default(false)->after("path");
    });
  }
  
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('language_lines', function (Blueprint $table) {
      $table->dropColumn('path');
      $table->dropColumn('is_custom');
    });
  }
};
