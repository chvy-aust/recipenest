<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            // FODO CUISINES
            ['name' => 'Italian', 'category' => 'cuisine'],
            ['name' => 'Cajun', 'category' => 'cuisine'],
            ['name' => 'Chinese', 'category' => 'cuisine'],
            ['name' => 'Mexican', 'category' => 'cuisine'],
            ['name' => 'Indian', 'category' => 'cuisine'],
            ['name' => 'Japanese', 'category' => 'cuisine'],
            ['name' => 'French', 'category' => 'cuisine'],
            ['name' => 'Korean', 'category' => 'cuisine'],
            ['name' => 'Trinidadian', 'category' => 'cuisine'],
            ['name' => 'Jamaican', 'category' => 'cuisine'],
            ['name' => 'Greek', 'category' => 'cuisine'],
            ['name' => 'American', 'category' => 'cuisine'],
            ['name' => 'Thai', 'category' => 'cuisine'],
            // FLAVORS
            ['name' => 'Sweet', 'category' => 'flavor'],
            ['name' => 'Savory', 'category' => 'flavor'],
            ['name' => 'Spicy', 'category' => 'flavor'],
            ['name' => 'Sour', 'category' => 'flavor'],
            ['name' => 'Bitter', 'category' => 'flavor'],
            ['name' => 'Tangy', 'category' => 'flavor'],
            ['name' => 'Smoky', 'category' => 'flavor'],
            // DIETS
            ['name' => 'Vegan', 'category' => 'diet'],
            ['name' => 'Vegetarian', 'category' => 'diet'],
            ['name' => 'Gluten-Free', 'category' => 'diet'],
            ['name' => 'Low-Carb', 'category' => 'diet'],
            ['name' => 'Halal', 'category' => 'diet'],
            // DIFFICULTY
            ['name' => 'Adanced', 'category' => 'difficulty'],
            ['name' => 'Intermediate', 'category' => 'difficulty'],
            ['name' => 'Low Effort', 'category' => 'difficulty'],
            // MEAL TYPE
            ['name' => 'Breakfast', 'category' => 'meal'],
            ['name' => 'Lunch', 'category' => 'meal'],
            ['name' => 'Dinner', 'category' => 'meal'],
            ['name' => 'Snack', 'category' => 'meal'],
            ['name' => 'Dessert', 'category' => 'meal'],
            ['name' => 'Comfort Meal', 'category' => 'meal'],
            ['name' => 'Beverage', 'category' => 'meal'],
            // FOOD TYPES
            ['name' => 'Soup', 'category' => 'type'],
            ['name' => 'Salad', 'category' => 'type'],
            ['name' => 'Pastry', 'category' => 'type'],
            ['name' => 'Fried', 'category' => 'type'],
            ['name' => 'Baked', 'category' => 'type'],
            ['name' => 'Grilled', 'category' => 'type'],
            ['name' => 'Boiled', 'category' => 'type'],
            ['name' => 'Sandwich', 'category' => 'type'],
            ['name' => 'Pasta', 'category' => 'type'],
            ['name' => 'Barbecue', 'category' => 'type'],
            ['name' => 'Steamed', 'category' => 'type'],
            ['name' => 'Pizza', 'category' => 'type'],
            ['name' => 'Curry', 'category' => 'type'],
        ];

        foreach ($tags as $tag) {
            // If record does not exist, create new tag
            Tag::firstOrCreate(
                ['name' => $tag['name']],
                [
                    'category' => $tag['category'],
                    // generate URL-friendly slugs
                    'slug' => Str::slug($tag['name']),
                ]

            );
        }
    }
}
