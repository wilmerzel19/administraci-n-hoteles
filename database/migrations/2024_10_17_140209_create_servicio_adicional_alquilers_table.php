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
        Schema::create('servicio_adicional_alquilers', function (Blueprint $table) {

            $table->id();
            $table->foreignId('servicio_adicional_id')->constrained()->onDelete('cascade');
            $table->string('alquiler') ->index();
            $table->string('monto') ->nullable();
            $table->string('descripcion') ->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio_adicional_alquilers');
    }
};
