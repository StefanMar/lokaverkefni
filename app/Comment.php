<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function location()
    {
    	return $this->belongsTo(Location::class);
    }
}
