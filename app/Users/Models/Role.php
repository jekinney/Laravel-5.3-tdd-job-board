<?php

namespace App\Users\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarderd = [];

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }
}
