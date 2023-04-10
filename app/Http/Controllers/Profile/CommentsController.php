<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        return view('profile.comments.your-comments');
    }

    public function pending()
    {
        return view('profile.comments.pending');

    }
}
