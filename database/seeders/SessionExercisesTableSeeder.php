<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class SessionExercisesTableSeeder extends Seeder
{
    public function run()
    {
        $sessionExercises = [
            ['session_id' => 1, 'exercise_id' => 1, 'score' => 8],
            ['session_id' => 2, 'exercise_id' => 2, 'score' => 10],
            ['session_id' => 5, 'exercise_id' => 3, 'score' => 18],
            ['session_id' => 6, 'exercise_id' => 4, 'score' => 8],
            ['session_id' => 3, 'exercise_id' => 5, 'score' => 15],
            ['session_id' => 4, 'exercise_id' => 6, 'score' => 15],
            ['session_id' => 7, 'exercise_id' => 7, 'score' => 10],
            ['session_id' => 8, 'exercise_id' => 8, 'score' => 8],
            ['session_id' => 9, 'exercise_id' => 1, 'score' => 10],
            ['session_id' => 10, 'exercise_id' => 2, 'score' => 10],
            ['session_id' => 11, 'exercise_id' => 3, 'score' => 15],
            ['session_id' => 12, 'exercise_id' => 4, 'score' => 5],
            ['session_id' => 13, 'exercise_id' => 5, 'score' => 10],
            ['session_id' => 12, 'exercise_id' => 6, 'score' => 15],
            ['session_id' => 15, 'exercise_id' => 7, 'score' => 5],
            ['session_id' => 16, 'exercise_id' => 8, 'score' => 5],
            ['session_id' => 13, 'exercise_id' => 1, 'score' => 5],
            ['session_id' => 14, 'exercise_id' => 2, 'score' => 10],
            ['session_id' => 12, 'exercise_id' => 3, 'score' => 15],
            ['session_id' => 17, 'exercise_id' => 4, 'score' => 10],
            ['session_id' => 18, 'exercise_id' => 5, 'score' => 15],
            ['session_id' => 19, 'exercise_id' => 6, 'score' => 15],
            ['session_id' => 21, 'exercise_id' => 7, 'score' => 10],
            ['session_id' => 23, 'exercise_id' => 8, 'score' => 10],
            ['session_id' => 24, 'exercise_id' => 1, 'score' => 8],
            ['session_id' => 20, 'exercise_id' => 2, 'score' => 10],
            ['session_id' => 22, 'exercise_id' => 5, 'score' => 10],
            ['session_id' => 25, 'exercise_id' => 6, 'score' => 15],
            ['session_id' => 26, 'exercise_id' => 7, 'score' => 10],
            ['session_id' => 27, 'exercise_id' => 8, 'score' => 10],
            ['session_id' => 28, 'exercise_id' => 1, 'score' => 10],
            ['session_id' => 29, 'exercise_id' => 2, 'score' => 8],
            ['session_id' => 30, 'exercise_id' => 5, 'score' => 10],
        ];

        foreach ($sessionExercises as $sessionExercise) {
            DB::table('session_exercises')->insert([
                'session_id' => $sessionExercise['session_id'],
                'exercise_id' => $sessionExercise['exercise_id'],
                'score' => $sessionExercise['score'],
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ]);
        }
    }
}
