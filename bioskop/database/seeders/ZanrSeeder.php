<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zanr;

class ZanrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zanr::factory()->count(30)->create();
    }
}
