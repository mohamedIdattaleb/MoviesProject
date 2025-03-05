<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use hasFactory;

    protected $fillable = [
        'title',
        'description',
        'release_date',
        'duration',
        'rating',
        'genre_id',
        'image_path',
    ];
    public function genre()
    {
        return $this->belongsTo(Genres::class);
    }
    public function watchHistories()
    {
        return $this->hasMany(WatchHistory::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favorites::class);
    }
    public function getImagePathAttribute($value)
    {
        return url('images/movies/' . basename($value));
    }

}
