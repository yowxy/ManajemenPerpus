<?php

return [

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'anggotas'),
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'anggotas',
        ],
    ],

    'providers' => [
        'anggotas' => [
            'driver' => 'eloquent',
            'model' => App\Models\anggota::class,
        ],
    ],

    'passwords' => [
        'anggotas' => [
            'provider' => 'anggotas',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
