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
            $table->string('testimonial_title')->nullable();
            $table->string('testimonial_subtitle')->nullable();
            $table->string('testimonial_background');
            $table->string('testimonial_status');
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
