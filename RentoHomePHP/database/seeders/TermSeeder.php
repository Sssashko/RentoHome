<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Term;
use Faker\Factory as Faker;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Array to hold the terms
        $terms = [];

        // Generate 6 terms
        for ($i = 1; $i <= 6; $i++) {
            $terms[] = [
                'title' => $faker->sentence(), // Generate a random title
                'description' => $faker->realText($maxNbChars = 1000)
            ];
        }

        // Create the terms in the database
        foreach ($terms as $term) {
            Term::create($term);
        }
    }
}
