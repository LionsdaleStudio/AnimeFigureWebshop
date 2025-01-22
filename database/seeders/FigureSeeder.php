<?php

namespace Database\Seeders;

use App\Models\Figure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FigureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Direkt létrehozás
        Figure::factory()->create([
            "name" => "Batman 50th edition limited",
            "limited" => true
        ]);

        //Dummy adatok léltrehozása
        Figure::factory(150)->create();
    }
}
