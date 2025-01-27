<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Users extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password'
    ];


    public function watchHistories()
    {
        return $this->hasMany(WatchHistory::class);
    }


    public function favorites()
    {
        return $this->hasMany(Favorites::class);
    }
}
