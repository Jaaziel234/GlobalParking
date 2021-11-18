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
    	//agregamos los seeders a ejecutar
         $this->call(PermissionsTableSeeder::class);
    }
}
