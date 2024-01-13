<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountrySeeder::class); 
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class); 
        $this->call(CategoriesTableSeeder::class);
        $this->call(ExercisesTableSeeder::class);
        $this->call(SessionsTableSeeder::class); 
        $this->call(SessionExercisesTableSeeder::class); 
        
    }
}
