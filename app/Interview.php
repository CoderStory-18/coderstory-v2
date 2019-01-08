<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    // Fillable properties
    protected $guarded = [];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function tags() {
        // 1 product may have many tags 
       return $this->belongsToMany(Tag::class);
    }
}
