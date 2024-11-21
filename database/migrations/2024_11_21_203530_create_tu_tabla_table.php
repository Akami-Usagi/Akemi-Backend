<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuTablaTable extends Migration
{
    public function up()
    {
        Schema::create('tu_tabla', function (Blueprint $table) {
            $table->id();
            $table->string('campo1'); // Por ejemplo, un texto
            $table->integer('campo2'); // Por ejemplo, un número entero
            $table->timestamps(); // Crea columnas para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tu_tabla');
    }
}

