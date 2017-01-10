<?php

namespace App\Users\Models;

use App\Users\Traits\Developers;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Developers;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function addNew($request) 
    {
        $user = $this->create([
            'slug' => str_slug($request->name),
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        if($request->type === 'developer') {
            Role::where('slug', 'developer')->first()->users()->attach($user->id);
        } else {
            Role::where('slug', 'employer')->first()->users()->attach($user->id);
        }
        return $user;
    }

    public function hasRole($slug)
    {
        foreach($this->roles as $role) {
            if($role->slug === $slug) {
                return true;
            }
        }
        return false;
    }
}

