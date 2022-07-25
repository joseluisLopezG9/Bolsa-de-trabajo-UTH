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
            $table->enum("nivel", ["TSU", "Ingeniería"]);
            $table->integer('num_candidatos');
            $table->integer('num_vacantes');
            $table->string('edad');
            $table->string('genero');
            $table->string('idioma');
            $table->string('estado_civil');
            $table->string('exp');
            $table->string('conocimientos');
            $table->string('habilidades');
            $table->string('sueldo');
            $table->string('horario');
            $table->string('entrevistador');
            $table->string('contacto');
            $table->string('confidencial');
            $table->string('otros');
            $table->string('beneficios');
            $table->string('folio');
            $table->timestamps();

            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete("cascade");
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
