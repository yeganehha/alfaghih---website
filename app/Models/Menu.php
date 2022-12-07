<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class Menu extends Model
{
    protected $fillable = [
        'parent_id',
        'title',
        'link',
        'route',
        'type',
        'icon',
        'order',
        'customData',
        'isBreaker',
         'isActive',
    ];
    protected  $casts = [
        'parent_id' => 'int' ,
        'route' => 'array' ,
        'order' => 'int' ,
        'customData' => 'array' ,
        'isBreaker'=> 'boolean',
         'isActive' => 'boolean',
    ];

    public $timestamps = false;

    public static function generate($type , $parent_id = null ) {
        return cache()->remember('menu_of_' .$type.'_'.$parent_id , 15 * 60 , function ()  use($type,$parent_id) {
            return self::query()
                ->where('type' , $type)
                ->where('parent_id' , $parent_id)
                ->orderBy('order' , 'desc')
                ->with(str_repeat('child.' , 4 ).'child')
                ->get();
        });
    }

    public function child(){
        return $this->hasMany(Menu::class , 'parent_id');
    }

    public function parent(){
        return $this->belongsTo(Menu::class , 'parent_id');
    }

    public function isViewActive($menu = null){
        if ( $menu == null )
            $menu = $this;

        if ( ( ! is_null($menu->route) and $menu->route['route_name'] == Route::getCurrentRoute()->getName()  ) or ( $menu->link == Request::url() )){
            return true;
        }

        if ( $menu->child->count() )
            foreach ( $menu->child as $oneMenu )
                if ( $this->isViewActive($oneMenu) )
                    return true ;

        return false;
    }
}

