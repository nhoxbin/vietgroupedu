<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke($page) {
    	$metaTitle = __('page.' . $page);
    	if ($metaTitle === 'page.' . $page) {
    		$metaTitle = null;
    	}
    	return view($page, compact('metaTitle'));
    }
}
