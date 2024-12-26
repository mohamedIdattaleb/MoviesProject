<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
        'title',
        'description',
        'release_date',
        'duration',
        'rating',
        'genre_id',
        'image_path'
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
