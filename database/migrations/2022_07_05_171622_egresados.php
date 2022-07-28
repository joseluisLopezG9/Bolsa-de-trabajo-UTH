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
            $table->enum("nivelEstudios", ["TSU", "Ingeniería"]);
            $table->enum("carrera", ["TICs"]);
            $table->string('matricula');
            $table->string('division');
            $table->string('gen');
            $table->string('domicilio');
            $table->string('colonia');
            $table->enum("estado", ["Puebla", "Tlaxcala", "Estado de México"]);
            $table->string('mun');
            $table->string('tel');
            $table->string('cel');
            $table->string('email');
            $table->string('usuario');
            $table->string('contraseña');
            $table->date('fecha_alta');
            $table->date('vigencia');
            $table->string('n1');
            $table->string('n2');
            $table->string('n3');
            $table->string('n4');
            $table->string('n5');
            $table->string('n6');
            $table->string('n7');
            $table->string('n8');
            $table->string('n9');
            $table->string('n10');
            $table->string('area');
            $table->binary('cv');
            $table->string('folio');
            $table->string('observaciones');

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
        //
    }
}
