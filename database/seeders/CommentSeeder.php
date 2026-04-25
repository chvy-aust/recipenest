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
            $topLevelCommentCount = rand(2, 10);
            // generate lop level comments
            for ($i = 0; $i < $topLevelCommentCount; $i++) {
                $comment = Comment::create([
                    'recipe_id' => $recipe->id,
                    'user_id' => $users->random()->id,
                    'parent_id' => Null,
                    'content' => fake()->paragraph(rand(1,3))
                ]);
                // set how deep the levels of replies go
                $replyDepth = rand(0, 2);
                $this->generateReplies($comment->id, $users, $recipe->id, $replyDepth);
            }


        }
    }

    private function generateReplies($parentId, $users, $recipeId, $replyDepth): void
    {
        // End recursion loop
        if ($replyDepth <= 0) {
            return;
        }

        // if replyDepth = 2, generate two levels of replies
        $replyCount = rand(0, 5);
        for ($i = 0; $i < $replyCount; $i++) {
            $comment = Comment::create([
                'recipe_id' => $recipeId,
                'user_id' => $users->random()->id,
                'parent_id' => $parentId,
                'content' => fake()->paragraph(rand(1,3))
            ]);
            // recursively add another level of replies to the current level
            $this->generateReplies($comment->id, $users, $recipeId, $replyDepth - 1);
        }
    }
}
