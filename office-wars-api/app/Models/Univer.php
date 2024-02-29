<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Univer extends Model
{
    use HasFactory;

    protected $fillable = ['univerTitle', 'theme_id', 'imageUniver'];

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'univer_id');
    }
}
