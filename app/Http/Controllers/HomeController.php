<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {
        $posts = new Posts;
        $orders = $posts->where('type', 1)->whereHas('field')->limit(10)->get();
        $news = $posts->where('type', 0)->whereHas('parent', function ($query) {
            return $query->where('slug', '=', 'tin-tuc');
        })->limit(4)->get();
        $event = $posts->where('type', 0)->whereHas('parent', function ($query) {
            return $query->where('slug', '=', 'su-kien');
        })->limit(3)->get();
        return view('home', compact('orders', 'news', 'event'));
    }
}
