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
        Schema::table('page_items', function (Blueprint $table) {
            //
            $table->string('about_heading');
            $table->string('about_banner');
            $table->string('about_photo')->nullable();
            $table->string('about_description');
            $table->string('about_seo_title')->nullable();
            $table->string('about_seo_meta_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('page_items', function (Blueprint $table) {
            //
        });
    }
};
