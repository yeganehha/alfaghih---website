<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'commentable_id',
        'commentable_type',
        'parent_id',
        'name',
        'email',
        'comment',
        'is_approved',
    ];
    protected $casts = [
        'parent_id' => 'int',
        'is_approved' => 'boolean',
    ];


    public function unRead()
    {
        return self::query()->where('is_approved' , false)->count() ;
    }

    public function childs()
    {
        return $this->hasMany(self::class,'parent_id')->where('is_approved', true);
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function getAvatarAttribute()
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return "http://www.gravatar.com/avatar/$hash";
    }
}
