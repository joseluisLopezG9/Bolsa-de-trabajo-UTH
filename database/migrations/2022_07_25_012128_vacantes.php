<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vacantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('vacantes', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('empresa_id')->unsigned();
            $table->string('puesto');
            $table->bigInteger('nivel_id')->unsigned();
            $table->integer('num_candidatos');
            $table->integer('num_vacantes');
            $table->string('edad');
            $table->string('genero');
            $table->string('idioma');
            $table->string('estado_civil');
            $table->string('experiencia');
            $table->string('conocimientos');
            $table->string('habilidades');
            $table->double('sueldo', 8, 2);
            $table->string('horario');
            $table->string('entrevistador');
            $table->string('contacto');
            $table->string('confidencial');
            $table->string('otros')->nullable();
            $table->string('beneficios');
            $table->string('folio');
            $table->bigInteger('area_id')->unsigned();
            $table->timestamps();

            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete("cascade");
            $table->foreign('nivel_id')->references('id')->on('niveles')->onDelete("cascade");
            $table->foreign('area_id')->references('id')->on('areas_vacantes')->onDelete("cascade");
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
