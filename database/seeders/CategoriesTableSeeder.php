<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Memory',
            'Reasoning',
            'Perception'
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ]);
        }
    }
}
