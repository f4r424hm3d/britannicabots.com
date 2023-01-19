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
    Schema::table('portfolios', function (Blueprint $table) {
      $table->integer('seo_rating')->nullable()->after('status');
      $table->text('page_content')->nullable()->after('status');
      $table->text('meta_description')->nullable()->after('status');
      $table->text('meta_keyword')->nullable()->after('status');
      $table->text('meta_title')->nullable()->after('status');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('portfolios', function (Blueprint $table) {
      //
    });
  }
};
