<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recipe;
use App\Models\Tag;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Writing>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['Food', 'Desert', 'Drinks'];

        return [
            'title' => fake()->realText(fake()->numberBetween(20, 40)),
            'short_description' => fake()->sentences(fake()->numberBetween(2, 3), true),
            'full_description' => fake()->paragraphs(fake()->numberBetween(5, 20), true),
            'ingredients' => $this->htmlData(fake()->numberBetween(2, 6)),
            'instructions' => $this->htmlData(fake()->numberBetween(2, 6)),
            'image_path' => '/images/media/',
            'image_name' => $this->randomImage(),
            'yield' => fake()->numberBetween(1, 4),
            'total_time' => fake()->numberBetween(1, 10),
            'total_time_unit' => 'minute(s)',
            'publish_date' => fake()->dateTimeBetween(now()->subMonth(3), now()->subMonth(1)),
            'featured' => 1,
        ];
    }

        /**
     * Establish recipe (tag) relationships after instantiation
     */
    public function configure(): static
    {
        return $this->afterCreating(function (Recipe $recipe) {
        // Prevent crashing if badges do not exist
        if (Tag::count() > 0) {
            // Randomly return the ids of 2-6 badges
            $tagIds = Tag::inRandomOrder()->take(fake()->numberBetween(2,6))->pluck('id');
            // For each badge id, create a new active user-badge relationship
            $recipe->tags()->attach($tagIds);
        }

        });

    }

    public function randomImage()
    {
        $images = Storage::disk('media')->files();

        // Select a random index from the array
        $randomIndex = array_rand($images);

        // Retrieve the value corresponding to the random index
        $randomValue = $images[$randomIndex];

        return $randomValue;
    }

    public function htmlData($type = 'ol', $total = 6)
    {
        $html = '<ol>';
        for ($i = 0; $i < $total; $i++) {
            $html .= '<li>' . fake()->sentence(fake()->numberBetween(2, 6)) . '</>';
        }
        $html .= '</ol>';
        return $html;
    }

    public function featured(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'featured' => fake()->boolean(70),
            ];
        });
    }
}
