<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Planet extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'planetName', 'planetDescription', 'galacticCoordinates', 'population', 'slug', 'imagePlanet'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'planetName'
            ]
        ];
    }
    public function eventsPast()
    {
        return $this->hasMany(Event::class, 'planet_id');
    }
    public function events()
    {
        return $this->hasMany(Event::class, 'planet_id');
    }

    public function accommodations()
    {
        return $this->hasMany(Accomodation::class, 'planet_id');
    }
    public function sites()
    {
        return $this->hasMany(Site::class, 'planet_id');
    }

    // .


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->planetName);
        });
    }
}
