<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Planet extends Model
{
    use HasFactory;

    protected $fillable = [
        'planetName', 'planetDescription', 'galacticCoordinates', 'population', 'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->planetName);
        });
    }
}
