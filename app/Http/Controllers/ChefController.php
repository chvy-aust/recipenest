<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function index ()
    {
        $chef_data = User::list() -> paginate(4);
        return view('pages.custom.users.chef-list.index', compact('chef_data'));
    }

    public function show($id) {
        $data = User::list() -> author($id) -> first();
        return view('pages.custom.users.profile.show', compact('data'));
    }

    
}
