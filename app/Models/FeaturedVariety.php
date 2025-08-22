<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedVariety extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
        'position',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
