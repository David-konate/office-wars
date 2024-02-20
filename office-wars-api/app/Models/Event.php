<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'eventName',
        'eventDescription',
        'dateTime',
        'planet_id',
        'photoEvent',
        'slug',

    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'eventName'
            ]
        ];
    }
    /**
     * Relation avec la table Images
     */


    /**
     * Relation avec la table Planets
     */
    public function planet()
    {
        return $this->belongsTo(Planet::class, 'planet_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'event_id');
    }

    /**
     * Relation avec la table Sites
     */

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            $event->slug = Str::slug($event->eventName);
        });
    }
}
