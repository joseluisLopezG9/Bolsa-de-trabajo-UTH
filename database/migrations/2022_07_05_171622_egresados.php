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
            $table->string('name');
            $table->string('lastname');
            $table->string('lastname2');
            $table->enum("level", ["TSU", "Ingeniería"]);
            $table->enum("career", ["TICs"]);
            $table->string('enrollment');
            $table->string('division');
            $table->string('gen');
            $table->string('address');
            $table->string('suburb');
            $table->enum("state", ["Puebla", "Tlaxcala", "Estado de México"]);
            $table->string('mun');
            $table->string('tel');
            $table->string('cel');
            $table->string('email');
            $table->string('user');
            $table->string('pass');
            $table->date('reg_date');
            $table->date('validity');
            $table->string('skills');
            $table->string('skills1');
            $table->string('skills2');
            $table->string('skills3');
            $table->string('skills4');
            $table->string('skills5');
            $table->string('skills6');
            $table->string('skills7');
            $table->string('skills8');
            $table->string('skills9');
            $table->string('area');
            $table->binary('cv');
            $table->string('invoice');
            $table->string('remark');

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
