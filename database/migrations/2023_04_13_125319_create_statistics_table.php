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
    Schema::create('statistics', function (Blueprint $table) {
      $table->id();
      $table->string("route_name");
      $table->string("route_host");
      $table->string("route_uri");
      $table->string("route_method");
      $table->json("route_query")->nullable();
      $table->json("route_params")->nullable();
      $table->json("payload")->nullable();
      $table->string("ip");
      $table->string("user_agent");
      $table->string("referer")->nullable();
      $table->string("country")->nullable();
      $table->string("city")->nullable();
      $table->string("latitude")->nullable();
      $table->string("longitude")->nullable();
      $table->string("timezone")->nullable();
      $table->timestamps();
    });
  }
  
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('statistics');
  }
};
