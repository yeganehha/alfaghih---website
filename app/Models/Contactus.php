<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;

    protected $table = "contactuses";

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'subject',
        'message',
        'is_read',
    ];

    protected $casts = [
        'is_read' => 'boolean'
    ];

    public function unRead()
    {
        return self::query()->where('is_read' , false)->count() ;
    }
}
