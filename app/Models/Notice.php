<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = ['notice_categories_id', 'name', 'description', 'image', 'order', 'status', 'slug', 'seo_title', 'seo_description', 'seo_keywords', 'seo_schema', 'views', 'icon'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function category()
    {
        return $this->belongsTo(NoticeCategory::class, 'notice_categories_id');
    }
}
