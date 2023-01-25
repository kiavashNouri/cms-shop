<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileLinksController extends Controller
{
    public function activityShow()
    {
        return view('profile.links.activity');
    }
    public function viewFullActivity()
    {
        return view('profile.links.fullActivity');
    }
}
