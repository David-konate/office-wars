<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model

{
    use HasFactory;


    protected $fillable = ['questionTitle', 'level_id', 'category_id', 'imageQuestion'];

    // Relation avec la table "Level"
    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    // Relation avec la table "Category"
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Relation avec la table "Answer"
    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id');
    }
}
