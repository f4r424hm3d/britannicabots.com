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
        Schema::table('blog_categories', function (Blueprint $table) {
          $table->integer('seo_rating')->nullable()->after('slug');
          $table->text('page_content')->nullable()->after('slug');
          $table->text('meta_description')->nullable()->after('slug');
          $table->text('meta_keyword')->nullable()->after('slug');
          $table->text('meta_title')->nullable()->after('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blog_categories', function (Blueprint $table) {
            //
        });
    }
};
