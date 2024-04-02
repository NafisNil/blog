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
            $table->string('contact_heading');
            $table->string('contact_banner');
            $table->text('contact_address');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->text('contact_mao_iframe');
            $table->string('contact_seo_title')->nullable();
            $table->text('contact_seo_meta_description')->nullable();
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
