<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wallet;

class WalletSeeder extends Seeder
{
    public function run()
    {
        Wallet::updateOrCreate(['name_wallet' => "Petit compte", 'percentage' => 0]);
        Wallet::updateOrCreate(['name_wallet' => "Moyen compte", 'percentage' => 0]);
        Wallet::updateOrCreate(['name_wallet' => "Grand compte", 'percentage' => 0]);
    }
}
