<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LevelSeeder::class);

        $this->call(RoleSeeder::class);

        $this->call(StateSeeder::class);

        $this->call(UserSeeder::class);
    }
}
