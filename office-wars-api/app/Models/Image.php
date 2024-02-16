<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    // Image.php (modèle Eloquent)
    protected $fillable = ['imageName', 'site_id', 'event_id', 'updated_at', 'created_at', 'imagePath'];



    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
