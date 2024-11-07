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
        Schema::create('sales_item', function (Blueprint $table) {
            $table->id('id_sale_item');
            $table->foreignId('fk_id_sale_order')->constrained('sales_order', 'id_sale_order');
            $table->foreignId('fk_id_product')->constrained('products', 'id_product');
            $table->integer('quantity');
            $table->decimal('unitary_price', 8, 2);
            $table->decimal('subtotal', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_item');
    }
};
