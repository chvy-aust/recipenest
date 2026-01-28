<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $total_users = 20;
        $reset_recipes = 0; // 1 = yes, 0 = no

        // Create x users
        $users = User::factory($total_users - 2)->create();
    }
}
