<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->increments('penjualan_id'); // Primary key (INT UNSIGNED AUTO_INCREMENT)
            $table->unsignedBigInteger('user_id'); // FK ke m_user (BIGINT UNSIGNED)
            $table->string('pembeli', 50);
            $table->string('penjualan_kode', 20);
            $table->dateTime('penjualan_tanggal');
            $table->timestamps();

            // Foreign key ke m_user
            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('m_user')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
