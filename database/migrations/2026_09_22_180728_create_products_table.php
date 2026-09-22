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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // Menghubungkan ke tabel categories

            $table->foreignId('category_id')->constrained()->OnDelete('cascade');
            $table->string('name');
            $table->string('sku')->unique();
            // Stock keeping unit / Kode Barcode Produk

            $table->integer('price');
            // Jarga jual barang

            $table->string('stock')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
