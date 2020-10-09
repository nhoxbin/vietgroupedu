<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	use Sluggable;

	public function sluggable() {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

	public function getParentsTree($post, $name) {
		if ($post->category_id == null && $post->parent_id == null)
            return $name;
        
        $name = $post->parent->slug . '/' . $name;
        return $this->getParentsTree($post->parent, $name);
	}

	function getParentsTreeAttribute() {
        return $this->getParentsTree($this, $this->slug);
    }

	public function parent() {
		return $this->belongsTo('App\Category', 'category_id');
	}

	public function field() {
		return $this->hasOne('App\PostField', 'post_id');
	}
}
