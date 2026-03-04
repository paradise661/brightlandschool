<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'banner_image', 'order', 'status', 'slug', 'seo_title', 'seo_description', 'seo_keywords', 'seo_schema'];
}
