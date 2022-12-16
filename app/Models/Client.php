<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Client extends Model
{
    use HasFactory,HasTranslations;

    protected $fillable = [
        'name',
        'image',
        'website',
        'order',
        'is_active',
    ];

    protected $casts = [
        'name' => 'array',
        'order' => 'int',
        'is_active' => 'boolean',
    ];

    protected $translatable = [
        'name',
    ];
}
