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
    Schema::create('hire_resources_sub_categories', function (Blueprint $table) {
      $table->id();
      $table->string('sub_category_name')->unique();
      $table->string('sub_category_slug')->unique();
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
      $table->text('meta_title')->nullable();
      $table->text('meta_keyword')->nullable();
      $table->text('meta_description')->nullable();
      $table->decimal('seo_rating', 2, 1)->nullable();
      $table->integer('review_number')->nullable();
      $table->decimal('best_rating', 2, 1)->nullable();
      $table->text('og_image_path')->nullable();
      $table->unsignedBigInteger('category_id');
      $table->foreign('category_id')->references('id')->on('hire_resources_categories');
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
    Schema::dropIfExists('hire_resources_sub_categories');
  }
};
