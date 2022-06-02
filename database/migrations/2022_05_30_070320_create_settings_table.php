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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text("site_logo")->nullable();
            $table->text("header_background")->nullable();
            $table->text("section2_background")->nullable();
            $table->text("stepbox_title")->nullable();
            $table->text("ans_of_q1")->nullable();
            $table->text("ans_of_q2")->nullable();
            $table->text("search")->nullable();
            $table->text("section3_title")->nullable();
            $table->text("product_image1")->nullable();
            $table->text("product_image2")->nullable();
            $table->text("product_name1")->nullable();
            $table->text("product_name2")->nullable();
            $table->text("product_detail1")->nullable();
            $table->text("product_detail2")->nullable();
            $table->text("section3_background")->nullable();
            $table->text("section3_text")->nullable();
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
        Schema::dropIfExists('settings');
    }
};
