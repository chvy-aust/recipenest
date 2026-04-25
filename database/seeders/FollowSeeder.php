<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        foreach ($users as $user) {
            // collect 3 - 12 non-current user ids
            $follows = User::where('id', '!=', $user->id)
                            ->inRandomOrder()
                            ->take(rand(3, 12))
                            ->pluck('id');
            $user->follows()->attach($follows);
        }
    }
}
