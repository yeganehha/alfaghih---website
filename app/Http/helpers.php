<?php


use HackerESQ\Settings\Facades\Settings;

if ( ! function_exists('setting')) {
    function setting($name = null , $default = null ){
        if (Settings::has($name) and Settings::get($name) !== null)
            return str_replace('http://localhost:8000' , trim(config('app.url') , '/'), Settings::get($name));

        return $default;
    }
}
