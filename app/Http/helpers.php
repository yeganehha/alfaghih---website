<?php


use HackerESQ\Settings\Facades\Settings;

if ( ! function_exists('setting')) {
    function setting($name = null , $default = null ){
        if (Settings::has($name))
            return Settings::get($name);

        return $default;
    }
}
