<?php

namespace App\Http\Controllers;

use App\Models\User;

class ChefController extends Controller
{
    public function index ()
    {
        $chef_data = User::list()->paginate(4);
        return view('pages.custom.users.chef-list.index', compact('chef_data'));
    }

    public function show($id) {
        $chef = User::list()->chef($id)->first();
        $featured_data = $chef->recipes()->where('featured', 1)->get();
        return view('pages.custom.users.profile.show', compact('chef', 'featured_data'));
    }

}
