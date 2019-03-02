<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $guarded = [];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function categories() {
        // 1 post may have many tags 
       return $this->belongsToMany(Category::class);
    }

    public function scopePublished() {
        return $this->where('published_at', "<=", Carbon::now());
    }
}
