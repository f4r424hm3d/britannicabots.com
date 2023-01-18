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
    Schema::create('static_page_seos', function (Blueprint $table) {
      $table->id();
      $table->string('page_name',100);
      $table->text('meta_title')->nullable();
      $table->text('meta_keyword')->nullable();
      $table->text('meta_description')->nullable();
      $table->text('page_content')->nullable();
      $table->integer('seo_rating')->nullable();
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
    Schema::dropIfExists('static_page_seos');
  }
};
