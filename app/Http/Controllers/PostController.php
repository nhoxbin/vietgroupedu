<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posts;
use App\Http\Resources\Post as PostResource;
use App\Http\Resources\Category as CategoryResource;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($categories, Posts $post) {
        return view('posts.show', compact('post'));
    }
}
