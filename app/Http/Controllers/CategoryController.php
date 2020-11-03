<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\Category as CategoryResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request, $categories) {
    	// lấy và tìm category cuối cùng trong chuỗi url
		$category = $request->segment(1) === 'don-hang' ? 'xuat-khau-lao-dong' : $request->segment(1);
        $cate = Category::where('slug', $category)->with(['children' => function($c) {
            $c->with(['posts' => function($p) {
                $p->whereHas('fields', function($f) {
                    $f->where('language', app()->getLocale());
                });
            }]);
        }, 'posts' => function($p) {
            $p->whereHas('fields', function($f) {
                $f->where('language', app()->getLocale())->where('slug', '<>', null);
            });
        }])->firstOrFail();
        $metaTitle = $cate->title;
        return view('posts.index', compact('cate', 'metaTitle'));
    }
}
