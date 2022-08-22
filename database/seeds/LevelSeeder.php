<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('niveles')->insert([
            'nombre' => 'TSU',
        ]);

        DB::table('niveles')->insert([
            'nombre' => 'Ingeniería',
        ]);

        DB::table('niveles')->insert([
            'nombre' => 'Maestría',
        ]);
    }
}
