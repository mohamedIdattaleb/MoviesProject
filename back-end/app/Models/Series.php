<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $fillable = [
        'title',
        'description',
        'release_date',
        'seasons',
        'episodes',
        'rating',
        'image_path',
        'genre_id'
    ];

    public function genre()
    {
        return $this->belongsTo(Genres::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorites::class);
    }

    public function watchHistories()
    {
        return $this->hasMany(WatchHistory::class);
    }
}
