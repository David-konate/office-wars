<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = ['themeTitle', 'imageTheme'];

    public function univers()
    {
        return $this->hasOne(Univer::class, 'theme_id');
    }
}
