<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'user_name',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password'
    ];

    public function favorites()
    {
        return $this->hasMany(Favorites::class);
    }
    public function watchHistories()
    {
        return $this->hasMany(WatchHistory::class);
    }
}
