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
        Schema::create('movimientos', function (Blueprint $table) {

 
            $table->id();
            $table->integer('id_alquiler') ->nullable();
            $table->integer('id_usuario') ->nullable();
            $table->date('fecha') ->nullable();
            $table->string('estado') ->nullable();
            $table->string('observaciones') ->nullable();
            $table->string('tipo') ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
