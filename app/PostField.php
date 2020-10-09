<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PostField extends Model
{
	protected $primaryKey = 'post_id';
    public $incrementing = false;

    /*public static function boot() {
		parent::boot();
		// this is for order post exist in posts table but not exist in postfield table
		static::saved(function($postField) {
			$postField->post->slug = Str::slug($postField->post->title) . '-' . $postField->post->id;
			$postField->post->save();
		});
	}*/

    public function post() {
    	return $this->belongsTo('App\Posts');
    }
}
