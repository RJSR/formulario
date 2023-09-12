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
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",120);
            $table->string("rif",20);
            $table->string("tlf1",20);
            $table->string("tlf2",20);
            $table->string("correo1",20);
            $table->string("correo2",20);
            $table->string("diredo",20);
            $table->string("dirpais",20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos');
    }
};
