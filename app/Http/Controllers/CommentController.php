<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class CommentController extends Controller
{
    public function store(Request $request, Recipe $recipe) 
    {
        $request->validate(['comment' => 'required|min:1']);

        // create new comment with related recipe fk
        $recipe->comments()->create([
            'content' => $request->comment,
            // return the id of the current authenticated user
            'user_id' => auth()->id(),
        ]);

        // refresh the page and jump back to the comment section
        return redirect()->to($recipe->getLink() . '#recipe-comments')
            ->with('success', 'comment posted!');
    }
}
