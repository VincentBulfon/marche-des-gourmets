<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Config::create([
            'config_name' => 'ticket_price',
            'value' => '6',
        ]);
        Config::create([
            'config_name' => 'market_email',
            'value' => 'vincent.bulfon@gmail.com',
        ]);
    }
}
