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
    Schema::create('qrs', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('qr_type_id');
      $table->string('title');
      $table->string('description')->nullable();
      $table->string('slug')->unique();
      $table->json('data');
      $table->timestamps();
      
      $table->foreign('qr_type_id')
        ->references("id")
        ->on("qr_types");
    });
  }
  
  /**`
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('qrs');
  }
};
