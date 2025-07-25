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
    Schema::create('hire_resources_sub_category_clients', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('sub_category_id');
      $table->foreign('sub_category_id')->references('id')->on('hire_resources_sub_categories');
      $table->string('client_name')->nullable();
      $table->string('link')->nullable();
      $table->string('logo')->nullable();
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
    Schema::dropIfExists('hire_resources_sub_category_clients');
  }
};
