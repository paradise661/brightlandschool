<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'status', 'order'];
    public function downloads()
    {
        return $this->hasMany(Download::class, 'download_categories_id');
    }
}
