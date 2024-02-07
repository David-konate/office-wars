<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'siteName',
        'siteDescription',
        'touristActivities',
        'attractionType',
        'shops',
        'slug',
    ];

    /**
     * Relation avec la table Planets
     */
    public function planet()
    {
        return $this->belongsTo(Planet::class, 'planets_id');
    }


    /**
     * Relation avec la table Accomodations (One-to-Many)
     */
    public function accomodations()
    {
        return $this->hasMany(Accomodation::class, 'site_id');
    }
}
