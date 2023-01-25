<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function manageTwoFactor()
    {
        return view('profile.layouts.two-factor-auth');
    }

    public function resetPassShow()
    {
        return view('profile.layouts.change-password');
    }

    public function notifManageShow()
    {
        return view('profile.layouts.notification-management');
    }
}
