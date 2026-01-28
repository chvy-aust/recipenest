<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;

// Auth::routes();


Route::get('/', [ChefController::class, 'index'])->name('chefs.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route to show all recipes
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');

// Route to show one writing
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');

// Rooute to show all authors
Route::get('/chefs', [ChefController::class, 'index'])->name('chefs.index');

// Route to show author profile
Route::get('/chefs/{id}', [ChefController::class, 'show'])->name('chefs.show');

// Route to show author portfolio
Route::get('/chefs/{id}/portfolio', [ChefController::class, 'showPortfolio'])->name('chefs.portfolio.show');


// Include the additional routes for prototype
require base_path('routes/prototype.php');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
