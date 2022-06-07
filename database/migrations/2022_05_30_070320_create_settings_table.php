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
            // $table->text("section3_title")->nullable();
            $table->text("product_image1")->nullable();
            $table->text("product_image2")->nullable();
            $table->text("product_name1")->nullable();
            $table->text("product_name2")->nullable();
            $table->text("product_detail1")->nullable();
            $table->text("product_detail2")->nullable();
            $table->text("section3_background")->nullable();
            $table->string('section3_head_title', 150)->nullable();
            $table->string('section3_head_below_title', 150)->nullable();
            $table->text("section3_text")->nullable();
            // $table->string('section1_heading', 70)->nullable();
            $table->string('section1_title', 150)->nullable();
            $table->text('section1_description')->nullable();
            // $table->string('section2_heading', 70)->nullable();
            $table->string('section2_title', 150)->nullable();
            $table->text('section2_description')->nullable();
            // $table->string('section3_heading', 70)->nullable();
            $table->string('section3_title', 150)->nullable();
            $table->text('section3_description')->nullable();
            // $table->string('section4_heading', 70)->nullable();
            $table->string('section4_title', 150)->nullable();
            $table->text('section4_description')->nullable();
            $table->text('section4_background');
            $table->text('s4_descrip');
            $table->text('sub_s4_img1');
            $table->text('sub_s4_title1');
            $table->string('sub_s4_btn1', 15);
            $table->text('sub_s4_img2');
            $table->text('sub_s4_title2');
            $table->string('sub_s4_btn2', 15);
            $table->text('sub_s4_img3');
            $table->text('sub_s4_title3');
            $table->string('sub_s4_btn3', 15);
            $table->string('footer_top_left');
            $table->string('footer_top_right');
            $table->text('footer_description');
            $table->text('footer_quick_link');
            $table->text('footer_content_right');
            $table->string('footer_btn_text', 20);
            $table->string('footer_logo');
            $table->string('footer_cards');
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
