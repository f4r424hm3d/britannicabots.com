<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveSeoRatingFromStaticPageSeosTable extends Migration
{
  public function up()
  {
    Schema::table('static_page_seos', function (Blueprint $table) {
      $table->dropColumn('seo_rating');
    });
  }

  public function down()
  {
    Schema::table('static_page_seos', function (Blueprint $table) {
      $table->integer('seo_rating')->nullable(); // Add it back if needed
    });
  }
}
