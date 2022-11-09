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
    Schema::create('teams', function (Blueprint $table) {
      $table->id();
      $table->string('name', 100);
      $table->string('email', 100)->nullable();
      $table->string('mobile', 100)->nullable();
      $table->string('designation', 100)->nullable();
      $table->string('quote', 100)->nullable();
      $table->string('linked_in', 100)->nullable();
      $table->string('profile_picture_name', 200)->nullable();
      $table->text('profile_picture_path')->nullable();
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
    Schema::dropIfExists('teams');
  }
};
