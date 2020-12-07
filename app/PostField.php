<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PostField extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'description', 'keywords', 'language', 'picture'];
    public $timestamps = false;
    public $table = 'posts_fields';

	public function sluggable() {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRecentPostAttribute() {
        return $this->where('language', app()->getLocale())
                    ->has('post.parent')
                    ->with(['post' => function($q) {
                        $q->orderBy('created_at', 'desc')->get();
                    }])->limit(5)->get();
    }

    public function getParentsTree($post, $name) {
        if ($post->category_id == null && $post->parent_id == null)
            return $name;
        
        $name = $post->parent->title . ' > ' . $name;
        return $this->getParentsTree($post->parent, $name);
    }

    function getParentsTreeAttribute() {
        return $this->getParentsTreeSlug($this, $this->title);
    }

    public function post() {
    	return $this->belongsTo('App\Posts');
    }
}
