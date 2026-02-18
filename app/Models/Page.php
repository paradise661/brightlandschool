<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'icon',
        'order',
        'status',
    ];
    public function items()
    {
        return $this->hasMany(PageItem::class)
            ->orderBy('order');
    }
}
