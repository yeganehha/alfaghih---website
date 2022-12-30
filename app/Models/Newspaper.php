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


    /**
     * Interact with the user's address.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function image(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: fn ($value) => str_replace('http://localhost:8000' , trim(config('app.url') , '/'), $value),
        );
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable' )->where('is_approved', true);
    }

    public function comments_parent()
    {
        return $this->morphMany(Comment::class, 'commentable' )->where('is_approved', true)->where('parent_id' , null);
    }
}
