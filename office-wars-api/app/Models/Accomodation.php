<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Accomodation extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'accomodationName', 'accomodationType', 'numberOfRoom', 'rates', 'slug', 'planet_id'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'accomodationName'
            ]
        ];
    }
    /**
     * Relation avec la table Images (Many-to-Many)
     */

    /**
     */

    public function planet()
    {
        return $this->belongsTo(Planet::class, 'planet_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class); // Assurez-vous de remplacer 'Image' par le nom de votre modèle Image
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->accomodationName);
        });
    }
}
