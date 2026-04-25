<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Badge;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('Password1'),
            'remember_token' => Str::random(10),
            'role' => 'chef',
            'image_path' => '/images/profiles/',
            'image_name' => $this->randomImage(),
            'short_description' => fake()->sentences(fake()->numberBetween(1, 2), true),
            'full_description' => fake()->paragraphs(fake()->numberBetween(1, 6), true),
            'twitter' => fake()->boolean(50) ? 'https://x.com/' : null,
            'tiktok' => fake()->boolean(50) ? 'https://tiktok.com/' : null,
            'facebook' => fake()->boolean(50) ? 'https://facebook.com/' : null,
            'instagram' => fake()->boolean(50) ? 'https://instagram.com/' : null,
            'youtube' => fake()->boolean(50) ? 'https://youtube.com/' : null,
        ];
    }

    /**
     * Establish user (badge) relationships after instantiation
     */
    public function configure(): static
    {
        return $this->afterCreating(function (User $user) {
        // Prevent crashing if badges do not exist
        if (Badge::count() > 0) {
            // Randomly return the ids of 2-6 badges
            $badgeIds = Badge::inRandomOrder()->take(fake()->numberBetween(2,6))->pluck('id');
            // For each badge id, create a new active user-badge relationship
            $user->badges()->attach($badgeIds, ['active' => true]);
        }

        });

    }
    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }


    public function randomImage()
    {
        $images = Storage::disk('profiles')->files();

        // Select a random index from the array
        $randomIndex = array_rand($images);

        // Retrieve the value corresponding to the random index
        $randomValue = $images[$randomIndex];

        return $randomValue;
    }
}
