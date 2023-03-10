<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($id)
    {
        $posts = Posts::findOrFail($id);
        return view('posts.posts', compact('posts'));
    }
}
