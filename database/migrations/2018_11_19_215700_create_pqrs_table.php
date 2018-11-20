<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePqrsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pqrs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('documento')->unique();
            $table->string('correo')->unique();
            $table->string('direccion');
            $table->string('telefono');
            $table->string('tipo');
            $table->text('solicitud');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pqrs');
    }
}
