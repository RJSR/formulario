<?php

namespace Database\Seeders;
use App\Models\Datos;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Datos::factory(2)->create();
    }
}
