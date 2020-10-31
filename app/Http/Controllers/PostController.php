<?php

namespace App\Http\Controllers;

use App\PostField;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($category, PostField $post) {
    	$metaTitle = $post->title;
    	$recent_post = $post->recent_post;
        return view('posts.show', compact('post', 'recent_post', 'metaTitle'));
    }
}
