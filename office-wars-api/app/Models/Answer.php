<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['answerText', 'isCorrect', 'question_id'];

    // Relation avec la table "Question"
    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
