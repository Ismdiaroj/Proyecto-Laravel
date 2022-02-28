<?php

namespace Database\Seeders;

use App\Models\Alimento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class alimentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alimento::factory(20)->create();
    }
}
