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
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->id();
            $table->increments('penjualan_id');

            // user_id (FK) int
            // Pastikan ini di kedua file (t_penjualan dan t_stok)
            $table->unsignedBigInteger('user_id');

            // pembeli string(50)
            $table->string('pembeli', 50);

            // penjualan_kode string(20)
            $table->string('penjualan_kode', 20);

            // penjualan_tanggal datetime
            $table->dateTime('penjualan_tanggal');
            
            // timestamps() dihapus karena tidak ada di gambar

            // MENAMBAHKAN FOREIGN KEY
            // (Saya asumsikan relasinya ke m_user(user_id))
            $table->foreign('user_id')->references('user_id')->on('m_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
