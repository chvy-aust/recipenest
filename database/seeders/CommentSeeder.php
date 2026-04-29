<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $recipes = Recipe::all();

        foreach ($recipes as $recipe) {
            // sets the amount of non-reply comments on a recipe
            $commentCount = rand(2, 10);
            // generate lop level comments
            for ($i = 0; $i < $commentCount; $i++) {
                $comment = Comment::create([
                    'recipe_id' => $recipe->id,
                    'user_id' => $users->random()->id,
                    'content' => fake()->paragraph(rand(1,3))
                ]);
            }


        }
    }

}
