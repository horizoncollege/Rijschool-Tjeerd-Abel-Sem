<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class PakketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        // DB::table('pakkets')->insert([
        //     'id' => 1,
        //     'title' => '10 lessen',
        //     'prijs' => 1000,
        //     'prijs_los' => 2000,
        //     'aantal_lessen' => 10,
        //     'auto' => 'Sedan',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);   

        for ($i = 0; $i < 10; $i++) {
            DB::table('pakkets')->insert([
                'title' => $faker->word,
                'prijs' => $faker->numberBetween(500, 5000),
                'prijs_los' => $faker->numberBetween(1000, 10000),
                'aantal_lessen' => $faker->numberBetween(5, 20),
                'auto' => $faker->randomElement(['Compact', 'Crossover', 'Elektrisch', 'Sedan']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
