<?php

namespace Database\Seeders;

use App\Models\Extra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $extras = [
            [
                'name' => 'Early Check-in',
                'slug' => 'early-check-in',
                'description' => 'Incheck van 10:00 uur in plaats van 15:00 uur',
                'price' => 1500, // €15.00
                'is_active' => true,
            ],
            [
                'name' => 'Late Check-out',
                'slug' => 'late-check-out',
                'description' => 'Uitcheck tot 18:00 uur in plaats van 11:00 uur',
                'price' => 1500,
                'is_active' => true,
            ],
            [
                'name' => 'Airport Pick-up',
                'slug' => 'airport-pickup',
                'description' => 'Ophaalservice vanaf het dichtstbijzijnde vliegveld',
                'price' => 2500, // €25.00
                'is_active' => true,
            ],
            [
                'name' => 'Spa & Wellness Package',
                'slug' => 'spa-wellness',
                'description' => 'Massage, sauna en wellnessfaciliteiten',
                'price' => 5000, // €50.00
                'is_active' => true,
            ],
            [
                'name' => 'Private Chef Dinner',
                'slug' => 'private-chef',
                'description' => '3-gangen diner bereid door onze privéchef',
                'price' => 10000, // €100.00
                'is_active' => true,
            ],
            [
                'name' => 'Pet Friendly Add-on',
                'slug' => 'pet-friendly',
                'description' => 'Toestaan van huisdieren (honden/katten)',
                'price' => 2000, // €20.00
                'is_active' => true,
            ],
            [
                'name' => 'Baby Crib & Setup',
                'slug' => 'baby-crib',
                'description' => 'Wieg, luierverwarmer en babyspeelgoed',
                'price' => 1000, // €10.00
                'is_active' => true,
            ],
        ];

        foreach ($extras as $extra) {
            Extra::create($extra);
        }
    }
}
