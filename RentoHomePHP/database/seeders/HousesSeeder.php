<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\House;

class HousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $houses = [
            [
                'image' => "img/HomeDubai.jpg",
                'title' => "Caravelle Resort",
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'country' => 'Latvia',
                'comfortability' => 'Premium',
                'price' => 100,
                'square' => 100
            ],
            [
                'image' => "img/HomeDubai2.jpg",
                'title' => "The Desert Pearl",
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'country' => 'Latvia',
                'comfortability' => 'Premium',
                'price' => 500,
                'square' => 200
            ],
            [
                'image' => "img/HomeDubai3.jpg",
                'title' => "Sunset Haven",
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'country' => 'France',
                'comfortability' => 'Budget',
                'price' => 200,
                'square' => 100
            ],
            [
                'image' => "img/HomeLatvia.jpg",
                'title' => "Hotel Shonshana",
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'country' => 'German',
                'comfortability' => 'Middle',
                'price' => 300,
                'square' => 100
            ],
            [
                'image' => "img/HomeGerman.jpg",
                'title' => "Sahara Hotel Elite",
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'country' => 'Russia',
                'comfortability' => 'Premium',
                'price' =>  400,
                'square' => 250
            ],
            [
                'image' => "img/HomeParis.jpg",
                'title' => "Samatoma Sekara",
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'country' => 'German',
                'comfortability' => 'Middle',
                'price' => 125.5,
                'square' => 205.5
            ]
        ];

        foreach ($houses as $house) {
            House::create($house);
        }
    }
}
