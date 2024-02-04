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
        Schema::table('home_page_items', function (Blueprint $table) {
            //
            $table->string('about_subtitle')->nullable();
            $table->string('about_title');
            $table->string('about_description')->nullable();
            $table->string('about_person_name')->nullable();
            $table->string('about_person_phone')->nullable();
            $table->string('about_person_email')->nullable();
            $table->string('about_icon1')->nullable();
            $table->string('about_icon1_url')->nullable();
            $table->string('about_icon2')->nullable();
            $table->string('about_icon2_url')->nullable();
            $table->string('about_icon3')->nullable();
            $table->string('about_icon3_url')->nullable();
            $table->string('about_icon4')->nullable();
            $table->string('about_icon4_url')->nullable();
            $table->string('about_icon5')->nullable();
            $table->string('about_icon5_url')->nullable();
            $table->string('about_photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_page_items', function (Blueprint $table) {
            //
        });
    }
};
