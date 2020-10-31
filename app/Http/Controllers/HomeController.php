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
        $news = PostField::where('language', app()->getLocale())
                        ->doesntHave('post.order')
                        ->with(['post.parent' => function($q) {
                            $q->where('slug', 'tin-tuc')->get();
                        }])->whereHas('post.parent')
                        ->get();
        $event = $posts->doesntHave('order')
                       ->whereHas('parent', function ($q) {
            return $q->where('slug', '=', 'su-kien');
        })->limit(3)->get();
        return view('home', compact('orders', 'news', 'event'));
    }
}
