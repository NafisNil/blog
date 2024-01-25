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
        Schema::create('home_page_items', function (Blueprint $table) {
            $table->id();
            $table->text('banner_title')->nullable();
            $table->string('banner_person_name');
            $table->text('banner_person_designation')->nullable();
            $table->text('banner_person_description')->nullable();
            $table->text('banner_button_text')->nullable();
            $table->string('banner_button_url')->nullable();
            $table->string('banner_photo');
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
        Schema::dropIfExists('home_page_items');
    }
};
