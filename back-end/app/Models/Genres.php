<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function movies()
    {
        return $this->hasMany(Movies::class);
    }
    public function series()
    {
        return $this->hasMany(Series::class);
    }
}
