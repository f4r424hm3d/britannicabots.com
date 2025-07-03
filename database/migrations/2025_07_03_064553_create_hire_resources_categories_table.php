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
    Schema::create('hire_resources_categories', function (Blueprint $table) {
      $table->id();
      $table->string('category_name')->unique();
      $table->string('category_slug')->unique();
      $table->string('banner_title')->nullable();
      $table->text('banner_shortnote')->nullable();
      $table->string('hourly_price')->nullable();
      $table->string('year_of_experience', 50)->nullable();
      $table->string('developers', 50)->nullable();
      $table->string('clients', 50)->nullable();
      $table->string('banner_image')->nullable();
      $table->text('title')->nullable();
      $table->longText('description')->nullable();
      $table->text('section2_title')->nullable();
      $table->longText('section2_description')->nullable();
      $table->string('section2_image')->nullable();
      $table->boolean('status')->default(true);
      $table->unsignedBigInteger('created_by')->nullable();
      $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
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
    Schema::dropIfExists('hire_resources_categories');
  }
};
