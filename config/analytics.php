<?php

return [

    /**
     * Analytics Dashboard.
     *
     * The prefix and middleware for the analytics dashboard.
     */
    'prefix' => 'gwc/dashboard',

    'middleware' => [
        'web',
        'auth:admin',
        'admin'
    ],

    /**
     * Exclude.
     *
     * The routes excluded from page view tracking.
     */
    'exclude' => [
        '/home',
        '/auth/*',
    ],

    'session' => [
        'provider' => \AndreasElia\Analytics\RequestSessionProvider::class,
    ],

];
