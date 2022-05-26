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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text("user_id")->nullable();
            $table->text("name")->nullable();
            $table->text("image")->nullable();
            $table->text("price")->nullable();
            $table->text("sku")->nullable();
            $table->text("serial_no")->nullable();
            $table->text("status")->nullable();
            $table->date("expiry_date")->nullable();
            $table->date("purchased_date")->nullable();
            $table->text("description")->nullable();
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
        Schema::dropIfExists('products');
    }
};
