<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'album_id',
    ];
    public function gallery()
    {
        return $this->belongsTo(Album::class, 'album_id');
    }
}
