<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPost extends Model
{
    protected $primaryKey = 'post_id';
    public $incrementing = false;
    public $timestamps = false;
}
