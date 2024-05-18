<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id();
            $table->string('indicativo_telefono')->nullable();
            $table->string('numero_telefono')->nullable();
            $table->string('direccion_tienda')->nullable();
            $table->string('nombre_titular')->nullable();
            $table->string('numero_cuenta')->nullable();
            $table->string('tipo_cuenta')->nullable();
            $table->string('banco')->nullable();
            $table->string('correodePagos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiendas');
    }
}
