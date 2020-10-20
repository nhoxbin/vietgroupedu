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
    	$metaTitle = $post->title;
    	$recent_post = Posts::whereDate('created_at', '>=', date('Y-m-d', strtotime("-1 week")))->limit(5)->get();
        return view('posts.show', compact('post', 'recent_post', 'metaTitle'));
    }
}
