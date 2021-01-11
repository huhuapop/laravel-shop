<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('user_addresses')->truncate();
        $this->call(UserSeeder::class);
        $this->call(UserAddressSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
