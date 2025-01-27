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
    Schema::create('portfolio_images', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('portfolio_id');
      $table->foreign('portfolio_id')->references('id')->on('portfolios');
      $table->string('image_name', 200);
      $table->text('image_path');
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
    Schema::dropIfExists('portfolio_images');
  }
};
