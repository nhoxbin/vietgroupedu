<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PostField extends Model
{
	protected $primaryKey = 'post_id';
    public $incrementing = false;
    public $timestamps = false;
    public $table = 'posts_fields';
    
    public function post() {
    	return $this->belongsTo('App\Posts');
    }
}
