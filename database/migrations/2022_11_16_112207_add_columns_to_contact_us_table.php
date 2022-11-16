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
    Schema::table('contact_us', function (Blueprint $table) {
      $table->enum('type', ['contact-us', 'get-quote'])->after('message');
      $table->string('services', 200)->nullable()->after('message');
      $table->string('website', 200)->nullable()->after('message');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('contact_us', function (Blueprint $table) {
      //
    });
  }
};
