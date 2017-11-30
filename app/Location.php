<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = [];

    public function likes(){
    	return $this->belongsToMany(User::class);
    }
}
