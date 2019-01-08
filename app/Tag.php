<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];    
    
    public function getRouteKeyName() {
        return 'name';
    }

    public function interviews() {
       return $this->belongsToMany(Interview::class);
    }
}
