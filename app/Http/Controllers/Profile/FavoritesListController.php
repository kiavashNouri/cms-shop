<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavoritesListController extends Controller
{
    public function index()
    {
        return view('profile.userLists.favorites-list');
    }

    public function publicList()
    {
        return view('profile.userLists.public-list');

    }
}
