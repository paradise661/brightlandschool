<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PopUp extends Model
{
    use HasFactory;
    protected $fillable = [

        "name",
        "link",
        "description",
        "image",
        "order",
        "status",

    ];
}
