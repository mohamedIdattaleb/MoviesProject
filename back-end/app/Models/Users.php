<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * Relationship: A user can have many watch histories.
     */
    public function watchHistories()
    {
        return $this->hasMany(WatchHistory::class);
    }

    /**
     * Relationship: A user can have many favorite movies or series.
     */
    public function favorites()
    {
        return $this->hasMany(Favorites::class);
    }
}
