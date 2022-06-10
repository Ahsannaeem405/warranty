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
        Schema::create('my_products', function (Blueprint $table) {
            $table->id();
            $table->text("user_id")->nullable();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('date_of_purchase', 10);
            $table->string('country_of_purchase', 20);
            $table->string('dealer_name', 30);
            $table->string('expiry', 10);
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
        Schema::dropIfExists('my_products');
    }
};
