<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\Category as CategoryResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request, $categories) {
    	// lấy và tìm category cuối cùng trong chuỗi url
		$categories = explode('/', $categories);
    	$last_slug = array_pop($categories);
        $cate = Category::where('slug', $last_slug)->with(['children' => function($c) {
            $c->with(['posts' => function($p) {
                $p->where('language', app()->getLocale())->get();
            }]);
        }, 'posts' => function($p) {
            $p->where('language', app()->getLocale())->get();
        }])->firstOrFail();
        $metaTitle = $cate->title;
        return view('posts.index', compact('cate', 'metaTitle'));
    }
}
