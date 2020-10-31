<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use ModelTree {
        ModelTree::boot as treeBoot;
    }
    use Sluggable;

	protected $fillable = ['parent_id', 'order', 'title'];

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    public function parent() {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function getUrlAttribute() {
        return 'test';
    }

    public function getParentsTree($cate, $name) {
        if ($cate->parent_id == null)
            return $name;
        
        $name = $cate->parent->title . ' > ' . $name;
        return $this->getParentsTree($cate->parent, $name);
    }

    function getParentsTreeAttribute() {
        return $this->getParentsTree($this, $this->title);
    }

    public function children() {
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function posts() {
        return $this->hasMany('App\Posts', 'category_id');
    }
}
