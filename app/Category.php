<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;

class Category extends Model
{
	use ModelTree {
        ModelTree::boot as treeBoot;
    }

	protected $fillable = ['parent_id', 'order', 'title'];

	public static function boot() {
		parent::boot();

        static::treeBoot();

		static::created(function($cate) {
			$cate->slug = Str::slug($cate->title);
			$cate->save();
		});
	}

    public function parent() {
    	return $this->belongsTo('App\Category');
    }
}
