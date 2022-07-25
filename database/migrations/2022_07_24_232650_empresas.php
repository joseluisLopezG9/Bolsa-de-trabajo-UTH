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
            $table->string('tel');
            $table->string('giro');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('actividad');
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
