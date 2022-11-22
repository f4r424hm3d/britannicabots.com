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
    Schema::create('testimonials', function (Blueprint $table) {
      $table->id();
      $table->string('name', 200);
      $table->string('company', 200);
      $table->text('review');
      $table->text('thumbnail_name')->nullable();
      $table->text('thumbnail_path')->nullable();
      $table->boolean('status')->default(1);
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
    Schema::dropIfExists('testimonials');
  }
};
