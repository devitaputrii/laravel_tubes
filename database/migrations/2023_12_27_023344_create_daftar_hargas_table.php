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
        Schema::create('daftar_hargas', function (Blueprint $table) {
            $table->id();
            $table->string('kelompok');
            $table->string('img')->default('/gambar/logo laundry.png');
            $table->string('name')->nullable();
            $table->float('minimal')->nullable();
            $table->integer('estimasi')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('user_id')->default(1);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_hargas');
    }
};
