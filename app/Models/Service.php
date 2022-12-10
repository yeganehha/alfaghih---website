<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory,HasTranslations;

    protected $fillable = [
        'name',
        'description',
        'icon',
        'order',
        'is_active',
        'showHomepage',
    ];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'order' => 'int',
        'is_active' => 'boolean',
        'showHomepage' => 'boolean',
    ];

    protected $translatable = [
        'name',
        'description',
    ];
}
