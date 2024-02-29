<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['univer_id', 'questionTitle', 'level_id', 'category_id', 'imageQuestion',]; // Ne pas répéter 'category_id'

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

    public function themes()
    {
        return $this->belongsTo(Theme::class, 'theme_id');
    }

    public function univer()
    {
        return $this->belongsTo(Univer::class, 'univer_id');
    }
}
