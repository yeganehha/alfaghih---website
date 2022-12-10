<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Newspaper extends Model
{
    use HasFactory,HasTranslations;

    protected $fillable = [
        'name',
        'image',
        'content_ar',
        'content_en',
        'truncate',
        'tags',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    protected $translatable = [
        'tags',
        'truncate',
        'name',
    ];


    public function comments(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(Comment::class, 'commentable');
    }
}
