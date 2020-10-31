<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Posts extends Model
{
	public function getParentsTreeSlug($post, $name) {
		if ($post->category_id == null && $post->parent_id == null)
            return $name;
        
        $name = $post->parent->slug . '/' . $name;
        return $this->getParentsTreeSlug($post->parent, $name);
	}

    public function getParentsTreeTitle($post, $name) {
        if ($post->category_id == null && $post->parent_id == null)
            return $name;
        
        $name = $post->parent->title . ' > ' . $name;
        return $this->getParentsTreeTitle($post->parent, $name);
    }

	function getParentsTreeAttribute() {
        return $this->getParentsTreeSlug($this, $this->slug);
    }

    function getParentsTreeTitleAttribute() {
        return $this->getParentsTreeTitle($this, $this->title);
    }

    public function getFirstCateTitle($cate) {
        if ($cate->parent === null) {
            return $cate;
        }
        return $this->getFirstCateTitle($cate->parent);
    }

    public function getFirstCateAttribute() {
        // lấy danh mục đầu tiên
        return $this->getFirstCateTitle($this);
    }

    public function fields() {
        return $this->hasMany('App\PostField', 'post_id');
                    // ->where('language', app()->getLocale());
    }

    public function order() {
        return $this->hasOne('App\OrderPost', 'post_id');
    }

	public function parent() {
		return $this->belongsTo('App\Category', 'category_id');
	}
}
