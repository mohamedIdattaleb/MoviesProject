<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    // Allow mass assignment for these attributes
    protected $fillable = [
        'user_id',
        'series_id',
        'movie_id',
    ];

    /**
     * Relationship: A favorite belongs to a user.
     */
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
