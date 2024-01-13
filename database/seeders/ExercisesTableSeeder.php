<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class ExercisesTableSeeder extends Seeder
{
    public function run()
    {
        $exercises = [
            ['name' => 'Exercise 1', 'points' => 10, 'category_id' => 1, 'course_id' => 1],
            ['name' => 'Exercise 2', 'points' => 15, 'category_id' => 2, 'course_id' => 2],
            ['name' => 'Exercise 3', 'points' => 20, 'category_id' => 3, 'course_id' => 3],
            ['name' => 'Exercise 4', 'points' => 10, 'category_id' => 1, 'course_id' => 4],
            ['name' => 'Exercise 5', 'points' => 15, 'category_id' => 2, 'course_id' => 5],
            ['name' => 'Exercise 6', 'points' => 20, 'category_id' => 3, 'course_id' => 1],
            ['name' => 'Exercise 7', 'points' => 10, 'category_id' => 1, 'course_id' => 2],
            ['name' => 'Exercise 8', 'points' => 10, 'category_id' => 3, 'course_id' => 3],
        ];

        foreach ($exercises as $exercise) {
            DB::table('exercises')->insert([
                'name' => $exercise['name'],
                'points' => $exercise['points'],
                'category_id' => $exercise['category_id'],
                'course_id' => $exercise['course_id'],
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ]);
        }
    }
}
