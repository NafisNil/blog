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
            $table->string('counter1_number');
            $table->string('counter1_name');
            $table->string('counter2_number');
            $table->string('counter2_name');
            $table->string('counter3_number');
            $table->string('counter3_name');
            $table->string('counter4_number');
            $table->string('counter4_name');
            $table->string('counter_status');
            $table->string('counter_background');
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
