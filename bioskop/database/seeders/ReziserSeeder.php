<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reziser;
class ReziserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reziser::factory()->count(30)->create();
    }
}
