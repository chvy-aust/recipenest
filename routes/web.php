<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CommentController;

// Auth::routes();


Route::get('/', [ChefController::class, 'index'])->name('chefs.index');

// Route to show all recipes
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');

// Route to show one writing
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');

// Rooute to show all authors
Route::get('/chefs', [ChefController::class, 'index'])->name('chefs.index');

// Route to show author profile
Route::get('/chefs/{id}', [ChefController::class, 'show'])->name('chefs.show');

// Route to store new comment
Route::post('/recipes/{recipe}/comments', [CommentController::class, 'store'])
    ->name('comments.store')
    ->middleware('auth');

// Include the additional routes for prototype
require base_path('routes/prototype.php');

Auth::routes();

