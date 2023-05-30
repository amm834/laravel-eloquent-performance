<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPostCountController extends Controller
{
    public function index()
    {
        $users = User::withCount('posts')->get();
        return view('user-posts',compact('users'));
    }
}
