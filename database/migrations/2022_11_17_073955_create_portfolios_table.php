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
    Schema::create('portfolios', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('service_id');
      $table->foreign('service_id')->references('id')->on('services');
      $table->string('company_name', 200);
      $table->string('company_slug', 200);
      $table->string('company_category', 200);
      $table->string('thumbnail_name', 200);
      $table->text('thumbnail_path');
      $table->longText('description');
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
    Schema::dropIfExists('portfolios');
  }
};
