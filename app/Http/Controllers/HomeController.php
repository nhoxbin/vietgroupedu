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
            ->whereHas('post', function($q) {
                $q->whereHas('parent', function($p) {
                    $p->where('slug', 'tin-tuc');
                });
            })->orderBy('post.created_at', 'desc')->limit(4)->get();
        $event = PostField::where('language', app()->getLocale())
            ->doesntHave('post.order')
            ->whereHas('post', function($q) {
                $q->whereHas('parent', function($p) {
                    $p->where('slug', 'su-kien');
                });
            })->orderBy('post.created_at', 'desc')->limit(3)->get();
        return view('home', compact('orders', 'news', 'event'));
    }
}
