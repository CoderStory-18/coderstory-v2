<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //
    protected $guarded = [];

    public function getRouteKeyName() {
        return 'slug';
    }
}
