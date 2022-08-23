<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Egresados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('egresados', function (Blueprint $table) {


            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->bigInteger('nivel_id')->unsigned();
            $table->bigInteger('carrera_id')->unsigned();
            $table->string('matricula');
            $table->string('division');
            $table->bigInteger('generacion_id')->unsigned();
            $table->string('domicilio');
            $table->string('colonia');
            $table->bigInteger('estado_id')->unsigned();
            $table->string('municipio');
            $table->string('telefono');
            $table->string('celular')->nullable();
            $table->string('email');
            $table->string('usuario');
            $table->string('contraseña');
            $table->date('fecha_alta');
            $table->date('vigencia');
            $table->string('n1')->nullable();
            $table->string('n2')->nullable();
            $table->string('n3')->nullable();
            $table->string('n4')->nullable();
            $table->string('n5')->nullable();
            $table->string('n6')->nullable();
            $table->string('n7')->nullable();
            $table->string('n8')->nullable();
            $table->string('n9')->nullable();
            $table->string('n10')->nullable();
            $table->bigInteger('area_id')->unsigned();
            $table->binary('cv')->nullable();
            $table->string('folio');
            $table->string('observaciones')->nullable();

            $table->timestamps();

            $table->foreign('nivel_id')->references('id')->on('niveles')->onDelete("cascade");
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete("cascade");
            $table->foreign('generacion_id')->references('id')->on('generaciones')->onDelete("cascade");
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete("cascade");
            $table->foreign('area_id')->references('id')->on('areas')->onDelete("cascade");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
