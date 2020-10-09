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

	/*public function setPicturesAttribute($pictures) {
	    if (is_array($pictures)) {
	        $this->attributes['pictures'] = json_encode($pictures);
	    }
	}*/

	/*public function getPicturesAttribute($pictures) {
	    return json_decode($pictures, true);
	}*/

	public function category() {
		return $this->belongsTo('App\Category');
	}

	public function field() {
		return $this->hasOne('App\PostField', 'post_id');
	}
}
