<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['categoryName'];

    // Relation avec la table "Questions"
    public function questions()
    {
        return $this->hasMany(Question::class, 'categorie_id');
    }
}
