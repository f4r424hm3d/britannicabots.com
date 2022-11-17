<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sub_services', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('service_id');
      $table->foreign('service_id')->references('id')->on('services');
      $table->string('sub_service_name', 200);
      $table->string('sub_service_slug', 200);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('sub_services');
  }
};
