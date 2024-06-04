<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apartament;
class ApartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apartaments = [
            [
                'image' => "img/apart1.webp",
                'title' => "Dunes Village",
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'country' => 'Latvia',
                'comfortability' => 'Premium',
                'price' => 50,
                'square' => 100
            ],
            [
                'image' => "img/apart2.jpg",
                'title' => "Grandes Shores",
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'country' => 'Latvia',
                'comfortability' => 'Premium',
                'price' => 150,
                'square' => 200
            ],
            [
                'image' => "img/apart3.jpg",
                'title' => "The Palace Unit 305",
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'country' => 'France',
                'comfortability' => 'Budget',
                'price' => 225,
                'square' => 100
            ],
            [
                'image' => "img/apart4.jpg",
                'title' => "Grande Cayman Resort",
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'country' => 'German',
                'comfortability' => 'Middle',
                'price' => 1000,
                'square' => 100
            ],
            [
                'image' => "img/apart5.webp",
                'title' => "Aqua Beach",
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'country' => 'Russia',
                'comfortability' => 'Premium',
                'price' =>  390,
                'square' => 250
            ],
            [
                'image' => "img/MainHome.jpg",
                'title' => "Kalamandra Opokora",
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'country' => 'German',
                'comfortability' => 'Premium',
                'price' => 105.5,
                'square' => 325
            ],
        ];

        foreach ($apartaments as $apartament) {
            Apartament::create($apartament);
        }
    }
}
