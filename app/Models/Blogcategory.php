<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogcategory extends Model
{
    protected $fillable = ['name', 'slug', 'status', 'order'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'blogcategories_id');
    }
}
