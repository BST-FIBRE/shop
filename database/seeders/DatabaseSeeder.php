<?php

namespace Database\Seeders;

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
        $this->call([
            \Database\Seeders\FamilliesSeeder::class,
            \Database\Seeders\RoleSeeder::class,
        ]);
        \App\Models\Tag::factory()->count(5)->create();
        \App\Models\Providers::factory()->count(5)->create();
        \App\Models\Categorie::factory()->count(15)->create();
        \App\Models\HoldOn::factory()->count(25)->create();
        \App\Models\Categorie::factory()->count(55)->create();

    }
}
