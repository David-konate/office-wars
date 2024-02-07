<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $primaryKey = 'Id_Types';
    public $incrementing = false;

    protected $fillable = [
        'nameType',
        'slug',
    ];
}
