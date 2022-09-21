<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FilmSeeder;
use Database\Seeders\ZanrSeeder;
use Database\Seeders\ReziserSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            
            ZanrSeeder::class,
            ReziserSeeder::class,
            FilmSeeder::class
        ]);
    }
}
