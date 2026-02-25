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
        'bullet_points',
        'message_name',
        'message_post',
        'image',
        'banner_image',
        'seo_title',
        'seo_description',
        'seo_schema',
        'seo_keywords',
        'order',
        'status',
        'slug',
    ];

    protected $casts = [
        'points' => 'array',
        'bullet_points' => 'array',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
