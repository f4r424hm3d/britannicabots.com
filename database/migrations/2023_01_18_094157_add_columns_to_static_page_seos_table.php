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
      $table->text('og_image_name')->nullable()->after('seo_rating');
      $table->text('og_image_path')->nullable()->after('seo_rating');
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
      //
    });
  }
};
