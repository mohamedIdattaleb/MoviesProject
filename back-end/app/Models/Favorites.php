<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    protected $fillable = [
        'user_id',
        'movie_id',
        'series_id'
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movies::class);
    }

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

}
