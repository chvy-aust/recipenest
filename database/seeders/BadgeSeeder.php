<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Badge;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $badges = [
            // CHEF TIER BADGES
            ['name' => 'New Chef', 'color' => 'green', 'icon' => '🐣'],
            ['name' => 'Executive Chef', 'color' => 'red', 'icon' => '🧑‍🍳'],
            // CHEF SPECIALTIES
            ['name' => 'Grill Master', 'color' => 'yellow', 'icon' => '🔥'],
            ['name' => 'Hot Headed', 'color' => 'red', 'icon' => '🌶️'],
            ['name' => 'Plant Lover', 'color' => 'green', 'icon' => '🥦'],
            ['name' => 'Sweet Tooth', 'color' => 'purple', 'icon' => '🍰'],
            ['name' => 'Poissonier', 'color' => 'blue', 'icon' => '🐟'],

            // DIFFERENT CUISINE BADGES
            ['name' => 'Italian', 'color' => 'green', 'icon' => null],
            ['name' => 'Cajun', 'color' => 'orange', 'icon' => null],
            ['name' => 'Chinese', 'color' => 'red', 'icon' => null],
            ['name' => 'Mexican', 'color' => 'green', 'icon' => null],
            ['name' => 'Indian', 'color' => 'orange', 'icon' => null],
            ['name' => 'Japanese', 'color' => 'blue', 'icon' => null],
            ['name' => 'French', 'color' => 'yellow', 'icon' => null],
            ['name' => 'Korean', 'color' => 'blue', 'icon' => null],
            ['name' => 'Trinidadian', 'color' => 'red', 'icon' => null],
            ['name' => 'Jamaican', 'color' => 'green', 'icon' => null],
            ['name' => 'Greek', 'color' => 'blue', 'icon' => null],
            ['name' => 'American', 'color' => 'red', 'icon' => null],
        ];
        
        foreach ($badges as $badge) {
            // If record does not exist, create new badge
            Badge::firstOrCreate(['name' => $badge['name']], $badge);
        }
    }
}
