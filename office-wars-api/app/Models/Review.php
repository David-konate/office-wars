<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'rating',
        'visitorComment',
        'slug',

    ];

    /**
     * Relation avec la table Events
     */
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($review) {
            $review->slug = Str::slug($review->title);
        });
    }
}
