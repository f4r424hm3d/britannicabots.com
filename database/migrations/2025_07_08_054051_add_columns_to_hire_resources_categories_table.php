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
    Schema::table('hire_resources_categories', function (Blueprint $table) {
      $table->after('created_by', function (Blueprint $table) {
        $table->text('meta_title')->nullable();
        $table->text('meta_keyword')->nullable();
        $table->text('meta_description')->nullable();
        $table->decimal('seo_rating', 2, 1)->nullable();
        $table->integer('review_number')->nullable();
        $table->decimal('best_rating', 2, 1)->nullable();
        $table->text('og_image_path')->nullable();
      });
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('hire_resources_categories', function (Blueprint $table) {
      //
    });
  }
};
