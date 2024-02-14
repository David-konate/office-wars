<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Site extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'siteName',
        'siteDescription',
        'touristActivities',
        'attractionType',
        'shops',
        'planet_id',
        'slug',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'siteName'
            ]
        ];
    }
    /**
     * Relation avec la table Planets
     */
    // Site model
    public function planet()
    {
        return $this->belongsTo(Planet::class, 'planet_id'); //
    }



    /**
     * Relation avec la table Accomodations (One-to-Many)
     */
    public function accomodations()
    {
        return $this->hasMany(Accomodation::class, 'site_id');
    }
}
