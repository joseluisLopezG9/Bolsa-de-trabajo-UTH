<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('empresas', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('domicilio');
            $table->string('telefono');
            $table->bigInteger('giro_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();
            $table->string('ciudad');
            $table->bigInteger('actividad_id')->unsigned();
            $table->string('observaciones')->nullable();
            
            $table->timestamps();

            $table->foreign('giro_id')->references('id')->on('giros')->onDelete("cascade");
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete("cascade");
            $table->foreign('actividad_id')->references('id')->on('actividades')->onDelete("cascade");
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
