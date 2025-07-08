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
    Schema::table('static_page_seos', function (Blueprint $table) {
      $table->after('page_content', function (Blueprint $table) {
        $table->decimal('seo_rating', 2, 1)->nullable();
        $table->integer('review_number')->nullable();
        $table->decimal('best_rating', 2, 1)->nullable();
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
    Schema::table('static_page_seos', function (Blueprint $table) {
      $table->dropColumn([
        'review_number',
        'best_rating',
        'seo_rating',
      ]);
    });
  }
};
