<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['event_categories_id', 'name', 'description', 'image', 'banner_image', 'order', 'status', 'slug', 'seo_title', 'seo_description', 'seo_keywords', 'seo_schema', 'views', 'start_time', 'end_time', 'location', 'icon', 'event_date', 'start_date', 'end_date'];

    // Cast created_at and updated_at to Carbon instances
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'event_categories_id');
    }
}
