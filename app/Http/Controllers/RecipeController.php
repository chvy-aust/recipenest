<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        // Eagerly load users + tags associated with recipe
        $recipes = Recipe::with(['user', 'tags'])->list()-> paginate(8);
        return view('pages.custom.users.recipe-list.index', compact('recipes'));
    }

    public function show(string $id){
        // Eagerly load users + tags + comments associated with recipe
        $recipe = Recipe::with(['user', 'tags', 'comments.user'])->list()->recipe($id)->first();
        // Return recipes from the same author that is not the current recipe
        $recommendedRecipes = Recipe::where('user_id', $recipe->user_id)
                        ->where("id", "!=", $recipe->id)
                        ->limit(4)
                        ->get();
        return view('pages.custom.users.recipe-single.show', compact('recipe', 'recommendedRecipes'));
    }
}
