<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Truncate table
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('recipes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        $recipes_per_user = 8;
        $user_data = User::all();


        // Create x recipes for authors
        foreach ($user_data as $chef) {
            $chef->recipes()->createMany(
                Recipe::factory($recipes_per_user)->make()->toArray()
            );
        }
    }
}
