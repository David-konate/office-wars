<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory, Sluggable;

    // Image.php (modèle Eloquent)
    protected $fillable = ['imageName', 'planet_id', 'site_id', 'event_id', 'updated_at', 'slug', 'created_at', 'imagePlanet'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'imageName'
            ]
        ];
    }

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
