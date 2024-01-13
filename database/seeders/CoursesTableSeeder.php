<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            'Memory Training',
            'Concentration Training',
            'Problem Solving',
            'Communication',
            'Logical',
        ];

        foreach ($courses as $course) {
            DB::table('courses')->insert([
                'name' => $course,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ]);
        }
    }
}
