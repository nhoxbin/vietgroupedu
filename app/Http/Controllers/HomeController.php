<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posts;
use App\PostField;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {
        $posts = new Posts;
        $orders = PostField::where('language', app()->getLocale())->has('post.order')->get();
        $news = Posts::with(['fields' => function($q) {
            $q->where('language', app()->getLocale());
        }])->whereHas('parent', function($q) {
            $q->where('slug', 'tin-tuc');
        })->doesntHave('order')->orderBy('created_at', 'desc')->limit(4)->get();

        $event = Posts::with(['fields' => function($q) {
            $q->where('language', app()->getLocale());
        }])->whereHas('parent', function($q) {
            $q->where('slug', 'su-kien');
        })->doesntHave('order')->orderBy('created_at', 'desc')->limit(3)->get();
        
        return view('home', compact('orders', 'news', 'event'));
    }
}
