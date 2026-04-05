<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipe_data = Recipe::list()-> paginate(8);
        return view('pages.custom.users.recipe-list.index', compact('recipe_data'));
    }

    public function show(string $id){
        $recipe = Recipe::list()->recipe($id)->first();
        $chef = $recipe->user;
        return view('pages.custom.users.recipe-single.show', compact('recipe', 'chef'));
    }
}
