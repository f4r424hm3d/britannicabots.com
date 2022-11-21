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
    Schema::create('blogs', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('category_id');
      $table->foreign('category_id')->references('id')->on('blog_categories');
      $table->string('title', 200);
      $table->string('title_slug', 200);
      $table->text('shortnote')->nullable();
      $table->text('thumbnail_name')->nullable();
      $table->text('thumbnail_path')->nullable();
      $table->longText('description')->nullable();
      $table->boolean('status')->default('1');
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
    Schema::dropIfExists('blogs');
  }
};
