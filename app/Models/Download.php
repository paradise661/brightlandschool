<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $fillable = ['download_categories_id', 'file_size', 'file', 'name', 'description', 'image', 'banner_image', 'order', 'status', 'slug', 'seo_title', 'seo_description', 'seo_keywords', 'seo_schema', 'views'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function category()
    {
        return $this->belongsTo(DownloadCategory::class, 'download_categories_id');
    }

    public function getFileSizeFormattedAttribute()
    {
        return humanFileSize($this->file_size);
    }
}
