<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::updateOrCreate([
            'ref_role' => "adms",
            'name' => "Administrateur",
            'access_level' => 100
        ]);
        Role::updateOrCreate([
            'ref_role' => "tech",
            'name' => "Technicien",
            'access_level' => 10
        ]);
        Role::updateOrCreate([
            'ref_role' => "user",
            'name' => "Utilisateur",
            'access_level' => 0
        ]);
    }
}
