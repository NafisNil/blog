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
            $table->string('about_status');
            $table->string('skill_title')->nullable();
            $table->string('skill_subtitle')->nullable();
            $table->string('skill_status')->nullable();
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
