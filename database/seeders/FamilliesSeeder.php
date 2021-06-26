<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Famillies;

class FamilliesSeeder extends Seeder
{
    public function run()
    {
        Famillies::updateOrCreate(['name' => "Outillage", "index" => 3 ]);
        Famillies::updateOrCreate(['name' => "Sécurité", "index" => 1]);
        Famillies::updateOrCreate(['name' => "Aérien", "index" => 5]);
        Famillies::updateOrCreate(['name' => "Souterrain", "index" => 6]);
        Famillies::updateOrCreate(['name' => "Consommables", "index" => 2]);
        Famillies::updateOrCreate(['name' => "Appareillage", "index" => 4]);
    }
}
