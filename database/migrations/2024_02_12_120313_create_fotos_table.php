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
            Schema::create('fotos', function (Blueprint $table) {
                $table->integer('fotoID')->autoIncrement();
                $table->string('judulFoto');
                $table->text('deskripsiFoto');
                $table->string('categoryName');
                $table->integer('id');
                $table->string('lokasiFile');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos');
    }
};