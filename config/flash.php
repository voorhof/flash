<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Flash Message View
    |--------------------------------------------------------------------------
    |
    | This is the view that will be used to render flash messages.
    |
    */
    'view' => 'flash::flash',

    /*
    |--------------------------------------------------------------------------
    | Flash Message Session Keys
    |--------------------------------------------------------------------------
    |
    | These are the session keys that will be used to store flash messages.
    |
    */
    'session_keys' => [
        'message' => 'flash_message',
        'level' => 'flash_level',
    ],

    /*
    |--------------------------------------------------------------------------
    | Flash Message Levels
    |--------------------------------------------------------------------------
    |
    | These are the available flash message levels.
    |
    */
    'levels' => [
        'success' => 'success',
        'warning' => 'warning',
        'danger' => 'danger',
        'info' => 'info',
    ],
];
