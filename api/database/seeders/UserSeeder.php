<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Logcomex',
            'email' => 'logcomex@logcomex.com',
            'password' => bcrypt('logcomex')
        ]);
    }
}
