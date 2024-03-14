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
        Schema::create('shop_favorites', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id')->index()->nullable();
            $table->uuid('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('shop_products');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
