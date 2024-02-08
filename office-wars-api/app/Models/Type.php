<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory, sluggable;

    protected $primaryKey = 'Id_Types';
    public $incrementing = false;

    protected $fillable = [
        'nameType',
        'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nameType'
            ]
        ];
    }
}
