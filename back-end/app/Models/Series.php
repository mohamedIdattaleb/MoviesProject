<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    // Allow mass assignment for these attributes
    protected $fillable = [
        'title',
        'description',
        'release_date',
        'seasons',
        'episodes',
        'rating',
        'genre_id',
        'image_path',
    ];

    /**
     * Relationship: A series belongs to a genre.
     */
    public function genre()
    {
        return $this->belongsTo(Genres::class);
    }

    /**
     * Relationship: A series can have many watch histories.
     */
    public function watchHistories()
    {
        return $this->hasMany(WatchHistory::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favorites::class);
    }
}
