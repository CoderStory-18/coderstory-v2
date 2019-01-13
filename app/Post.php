<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function categories() {
        // 1 product may have many tags 
       return $this->belongsToMany(Category::class);
    }
}
