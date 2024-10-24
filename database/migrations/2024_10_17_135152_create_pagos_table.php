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
        Schema::create('pagos', function (Blueprint $table) {

  

            $table->id();
            $table->date('fecha') ->nullable();
            $table->integer('monto') ->default(0);
            $table->string('referencia') ->nullable();
            $table->string('metodo') ->nullable();
            $table->string('entidad') ->nullable();
            $table->integer('entidad_id') ->nullable();
            $table->string('observaciones') ->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
