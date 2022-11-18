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
    Schema::create('vacancies', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('designation_id');
      $table->foreign('designation_id')->references('id')->on('designations');
      $table->string('title', 200);
      $table->integer('no_of_position');
      $table->string('experience', 200);
      $table->string('location', 200);
      $table->text('roles');
      $table->longText('job_description');
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
    Schema::dropIfExists('vacancies');
  }
};
