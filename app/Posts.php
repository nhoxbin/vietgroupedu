<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Posts extends Model
{
    public static function boot() {
		parent::boot();

		static::created(function($cate) {
			$cate->slug = Str::slug($cate->title) . '-' . $cate->id;
			$cate->save();
		});
	}

	public function setPicturesAttribute($pictures) {
	    if (is_array($pictures)) {
	        $this->attributes['pictures'] = json_encode($pictures);
	    }
	}

	public function getPicturesAttribute($pictures) {
	    return json_decode($pictures, true);
	}

	public function category() {
		return $this->belongsTo('App\Category');
	}
}
