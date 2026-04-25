<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // BADGE + TAG STATIC SEEDING
        $this->call(BadgeSeeder::class);
        $this->call(TagSeeder::class);

        // USER SEEDING
        // create static john doe user
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@mail.com',
            'role' => 'chef',
            'image_path' => '/images/profiles/',
            'image_name' => 'default.jpg',
        ]);
        // create static jane doe user
        User::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@mail.com',
            'role' => 'chef',
            'image_path' => '/images/profiles/',
            'image_name' => 'default.jpg',
        ]);

        // create randomly generated users
        User::factory(30)->create();
        // assign 4 - 9 randomly generated recipes to each user
        User::all()->each(function ($user) {
            Recipe::factory(rand(4, 9))->for($user)->create();
        });

        // FOLLOW + COMMENT SEEDER
        $this->call(FollowSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
