<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $fillable = ['download_categories_id', 'name', 'description', 'image', 'banner_image', 'order', 'status', 'slug', 'seo_title', 'seo_description', 'seo_keywords', 'seo_schema', 'views'];

    // Cast created_at and updated_at to Carbon instances
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function category()
    {
        return $this->belongsTo(DownloadCategory::class, 'download_categories_id');
    }
}
