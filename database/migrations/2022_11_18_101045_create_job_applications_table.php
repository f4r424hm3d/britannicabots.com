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
    Schema::create('job_applications', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('designation_id');
      $table->foreign('designation_id')->references('id')->on('designations');
      $table->string('name', 150);
      $table->string('email', 150);
      $table->string('mobile', 150);
      $table->string('experience', 150);
      $table->text('msg')->nullable();
      $table->string('source')->default('Website');
      $table->string('token', 30)->nullable();
      $table->boolean('called')->default(0);
      $table->boolean('interview')->default(0);
      $table->string('resume_name');
      $table->text('resume_path');
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
    Schema::dropIfExists('job_applications');
  }
};
