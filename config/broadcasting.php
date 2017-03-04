<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Broadcaster
    |--------------------------------------------------------------------------
    |
    | This option controls the default broadcaster that will be used by the
    | framework when an event needs to be broadcast. You may set this to
    | any of the connections defined in the "connections" array below.
    |
    */

    'default' => env('BROADCAST_DRIVER', 'pusher'),

    /*
    |--------------------------------------------------------------------------
    | Broadcast Connections
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the broadcast connections that will be used
    | to broadcast events to other systems or over websockets. Samples of
    | each available type of connection are provided inside this array.
    |
    */

    'connections' => [

        'pusher' => [
            'driver' => 'pusher',
            'key' => 'a4cf9788f64a498f7d68',
            'secret' => '6d26127bc03c7cdc9605',
            'app_id' => '309022',
            'options' => [
                //
                'cluster' => 'ap2',
                'encrypted'=>true
            ],
        ],

        'redis' => [
            'driver' => 'redis',
        ],

        'log' => [
            'driver' => 'log',
        ],

    ],

];
