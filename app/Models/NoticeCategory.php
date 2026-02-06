<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class NoticeCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'status', 'order', 'icon', 'description'];
    public function notices()
    {
        return $this->hasMany(Notice::class, 'notice_categories_id');
    }
}
