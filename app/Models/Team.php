<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasFactory,HasTranslations;

    protected $fillable = [
        'name',
        'description',
        'position',
        'image',
        'order',
        'is_active',
    ];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'position' => 'array',
        'order' => 'int',
        'is_active' => 'boolean',
    ];

    protected $translatable = [
        'name',
        'description',
        'position',
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
}
