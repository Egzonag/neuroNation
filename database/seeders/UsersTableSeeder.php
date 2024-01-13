<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countriesCount = DB::table('countries')->count();

        $users = [];

        for ($i = 0; $i < 10; $i++) { // Generate 10 users
            $users[] = [
                'name' => Str::random(10),
                'email' => 'user' . $i . '@mail.com',
                'status' => ($i % 2 == 0) ? 'active' : 'inactive',
                'country_id' => rand(1, $countriesCount),
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ];
        }

        DB::table('users')->insert($users);
    }
}
