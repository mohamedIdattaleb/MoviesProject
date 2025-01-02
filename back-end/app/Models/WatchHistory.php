<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchHistory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'movie_id',
        'series_id',
        'last_watched'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship: A favorite can belong to a series.
     */
    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    /**
     * Relationship: A favorite can belong to a movie.
     */
    public function movie()
    {
        return $this->belongsTo(Movies::class);
    }
}
