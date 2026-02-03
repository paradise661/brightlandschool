<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contacts extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'course', 'message', 'number', 'url'];
}
