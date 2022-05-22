<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\SettingsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
