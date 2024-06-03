<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OurServices;

class OurServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ourservices = [
            [
                'icon' => "fa-solid fa-money-bill",
                'title' => "Pricing",
                'description' => 'Reasonable rental rates for great value and location.',
            ],
            [
                'icon' => "fa-solid fa-location-crosshairs",
                'title' => "Location",
                'description' => 'Conveniently situated properties in desirable areas for easy access to amenities.',
            ],
            [
                'icon' => "fa-solid fa-building",
                'title' => "Quality",
                'description' => 'Exceptional property standards for your comfort.',
            ],
            [
                'icon' => "fa-solid fa-eye",
                'title' => "View",
                'description' => 'Stunning vistas for a memorable living experience.',
            ],
            [
                'icon' => "fa-solid fa-envelope",
                'title' => "Support",
                'description' => 'Round-the-clock assistance for peace of mind.',
            ],
            [
                'icon' => "fa-solid fa-people-group",
                'title' => "Efficient Maintenance",
                'description' => 'Responsive team for timely issue resolution.',
            ],
            [
                'icon' => "fa-solid fa-shield-halved",
                'title' => "Security",
                'description' => 'Robust security for resident safety.',
            ],
            [
                'icon' => "fa-solid fa-leaf",
                'title' => "Eco-friendly",
                'description' => 'Sustainable features for a greener living environment.',
            ],
        ];

        foreach ($ourservices as $ourservice) {
            OurServices::create($ourservice);
        }
    }
}
