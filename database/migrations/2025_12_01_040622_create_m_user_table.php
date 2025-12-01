<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('m_user', function (Blueprint $table) {
            $table->id('user_id');

            // FOREIGN KEY ke m_level
            $table->unsignedBigInteger('level_id');
            $table->foreign('level_id')->references('level_id')->on('m_level')->onDelete('cascade');

            $table->string('username', 50)->unique();
            $table->string('nama', 100);
            $table->string('password');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('m_user', function (Blueprint $table) {
            $table->dropForeign(['level_id']);
        });

        Schema::dropIfExists('m_user');
    }
};
