<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Accomodation extends Model
{
    use HasFactory;

    protected $fillable = [
        'accommodationName', 'accommodationType', 'numberOfRoom', 'rates', 'slug', 'site_id',
    ];


    /**
     * Relation avec la table Images (Many-to-Many)
     */

    /**
     * Relation avec la table Sites
     */
    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->accommodationName);
        });
    }
}
