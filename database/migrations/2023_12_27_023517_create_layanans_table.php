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
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('tema');
            $table->string('sub_tema');
            $table->string('img1')->default('/img/gallery/offers1.png');
            $table->string('img2')->default('/img/gallery/offers2.png');
            $table->string('img_icon')->default('/img/icon/offers-icon1.png');
            $table->string('judul');
            $table->text('deskripsi');
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
        Schema::dropIfExists('layanans');
    }
};
