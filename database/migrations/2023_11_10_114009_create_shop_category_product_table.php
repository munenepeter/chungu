<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shop_category_product', function (Blueprint $table) {
            $table->primary(['shop_category_id', 'shop_product_id']);
            $table->foreignId('shop_category_id')->nullable();
            $table->foreignId('shop_product_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_category_product');
    }
};
