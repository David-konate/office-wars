<?php

// app/Models/Ranking.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;

    protected $table = 'rankings';

    protected $fillable = [
        'resultQuizz',
        'timeQuizz',
        'user_id',
        'level'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
