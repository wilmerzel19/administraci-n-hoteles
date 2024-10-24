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
        Schema::create('locales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->index();
            $table->string('imagen')->nullable();
            $table->string('direccion')->index()->nullable();
            $table->text('descripcion')->index()->nullable();
            $table->string('telefono')->nullable();
            $table->string('website')->nullable();
            $table->integer('calificacion')->default(0);
            $table->integer('tipo')->default(1);




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locales');
    }
};
