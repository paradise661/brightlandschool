<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_id',
        'name',
        'icon',
        'description',
        'short_description',
        'points',
        'image',
        'banner_image',
        'seo_title',
        'seo_description',
        'seo_schema',
        'seo_keywords',
        'order',
        'status',
    ];

    protected $casts = [
        'points' => 'array',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
