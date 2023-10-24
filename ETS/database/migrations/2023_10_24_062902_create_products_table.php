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
            $table->unsignedBigInteger('jenis_products_id');
            $table->enum('kondisi', ['Baik', 'Layak', 'Rusak']);
            $table->string('nama');
            $table->longText('deskripsi');
            $table->longText('kecacatan')->nullable();
            $table->integer('jumlah');
            $table->string('gambar')->nullable();
            $table->timestamps();

            $table->foreign('jenis_products_id')->references('id')->on('jenis_products');
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
