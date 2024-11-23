<?php

use App\Providers\AppServiceProvider;
use App\Providers\SessionProvider;

return [
    'APP' => [
        "STATUS" => "UP",
        "KEY" => env('APP_KEY'),
        "TITLE" => "DAVINCI",
        "DEBUG" => true,
        "TIMEZONE" => "Asia/Tehran",
        "PROVIDERS" => [
            SessionProvider::class,
            AppServiceProvider::class
        ],
        "MIDDLEWARES" => [
            "WEB" => [],
            "API" => []
        ]
    ],



    'DATABASE' => [
        'default' => [
            "DRIVER" => "mysql",
            "SERVER_NAME" => env('DB_SERVER'),
            "DB_NAME" => env('DB_NAME'),
            "USERNAME" => env('DB_USERNAME'),
            "PASSWORD" => env('DB_PASSWORD'),
            "APPLY_TIMEZONE" => true,
            "TIMEZONE" => "+03:30"
        ],
    ],



    'ASSETS' => [
        'VERSION' => '1',
        'ALIAS' => [],
        'DL' => [
            'DEFAULT_CACHE' => false,
            'DIRECTORIES' => [
                'c' => [
                    'PATH' => 'Css',
                    'CACHE' => false,
                    'EXT' => 'css',
                    'MIME' => 'text/css',
                ],
                'j' => [
                    'PATH' => 'Js',
                    'CACHE' => true,
                    'EXT' => 'js',
                    'MIME' => 'application/javascript',
                ],
                'f' => [
                    'PATH' => 'Fonts',
                    'CACHE' => true,
                    'EXT' => 'ttf',
                    'MIME' => 'font/ttf',
                ],
                'i' => [
                    'PATH' => 'Images',
                    'CACHE' => true,
                    'EXT' => 'jpg',
                    'jpg' => 'image/jpeg',
                ],
            ],
        ],
    ],



    'LOGGER' => [
        'DEFAULT' => 'DAILY',

        'CHANNELS' => [
            'DAILY' => [
                'PATH' => storagePath('Logs/App/Daily'),
                'LEVEL' => 'debug',
                'MAX_FILES' => 7,
            ],
            'SINGLE' => [
                'PATH' => storagePath('Logs/App/davinci.log'),
                'LEVEL' => 'debug',
            ],
        ],

        'FORMAT' => '[{timestamp}] {level}: {message} {context} {extra} [RequestID: {request_id}]',
    ],



    'CACHE' => [
        'CACHE_DIR' => storagePath('/Maya/Cache'),
        'DEFAULT_EXPIRATION' => 3600,
        'ENCRYPTION_KEY' => env('APP_KEY'),
        'CLEANUP_INTERVAL' => 3600,
        'MAX_MEMORY_CACHE_SIZE' => 10,
        'ENABLE_ENCRYPTION' => false,
        'ENABLE_COMPRESSION' => false,
    ],



    'VIEW' => [
        'VIEW_FILE_EXTENSION' => '.blade.php',
        'VIEW_DIRECTORY' => basePath('View'),
        'VIEW_COMPILED_PATH' => storagePath('/Maya/Cache/Views')
    ],



    'CORS' => [
        'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE'],
        'allowed_origins' => ['*'],
        'allowed_headers' => ['Content-Type'],
        'max_age' => 86400,
        'supports_credentials' => true,
    ],



    'CSRF' => [],
];
