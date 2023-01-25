<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function showFactor(Request $request)
    {
        $data = $request->id;
        return view('profile.activity.show-factor',compact('data'));
    }
}
