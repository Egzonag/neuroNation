<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class SessionsTableSeeder extends Seeder
{
    public function run()
    {
        $sessions = [
            ['user_id' => 1, 'course_id' => 1],
            ['user_id' => 2, 'course_id' => 1],
            ['user_id' => 1, 'course_id' => 2],
            ['user_id' => 2, 'course_id' => 3],
            ['user_id' => 2, 'course_id' => 2],
            ['user_id' => 2, 'course_id' => 4],
            ['user_id' => 3, 'course_id' => 2],
            ['user_id' => 4, 'course_id' => 3],
            ['user_id' => 5, 'course_id' => 2],
            ['user_id' => 6, 'course_id' => 4],
            ['user_id' => 2, 'course_id' => 5],
            ['user_id' => 4, 'course_id' => 4],
            ['user_id' => 6, 'course_id' => 1],
            ['user_id' => 7, 'course_id' => 1],
            ['user_id' => 2, 'course_id' => 2],
            ['user_id' => 9, 'course_id' => 3],
            ['user_id' => 2, 'course_id' => 2],
            ['user_id' => 6, 'course_id' => 4],
            ['user_id' => 3, 'course_id' => 2],
            ['user_id' => 2, 'course_id' => 3],
            ['user_id' => 5, 'course_id' => 2],
            ['user_id' => 6, 'course_id' => 4],
            ['user_id' => 2, 'course_id' => 5],
            ['user_id' => 4, 'course_id' => 4],
            ['user_id' => 3, 'course_id' => 2],
            ['user_id' => 2, 'course_id' => 3],
            ['user_id' => 5, 'course_id' => 2],
            ['user_id' => 6, 'course_id' => 4],
            ['user_id' => 2, 'course_id' => 5],
            ['user_id' => 2, 'course_id' => 4],
        ];

        foreach ($sessions as $session) {
            DB::table('sessions')->insert([
                'user_id' => $session['user_id'],
                'course_id' => $session['course_id'],
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ]);
        }
    }
}