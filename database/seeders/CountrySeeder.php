<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            'Germany',
            'Switzerland',
            'Italy',
            'Austria',
            'France',
            'Poland',
            'Belgium',
            'Norway',
            'Sweden',
            'Finland'
        ];

        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country,
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ]);
        }
    }
}
