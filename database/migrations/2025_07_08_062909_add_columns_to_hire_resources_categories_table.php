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
    Schema::table('hire_resources_categories', function (Blueprint $table) {
      $table->after('created_by', function (Blueprint $table) {
        $table->string('left_note')->nullable();
        $table->string('right_note')->nullable();
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
    Schema::table('hire_resources_categories', function (Blueprint $table) {
      $table->dropColumn([
        'left_note',
        'right_note'
      ]);
    });
  }
};
