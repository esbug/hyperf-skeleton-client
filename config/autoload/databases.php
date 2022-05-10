<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
//    'default' => [
//        'driver' => config('nacos_config.mysql.driver','mysql'),
//        'host' => config('nacos_config.mysql.host','192.168.0.99'),
//        'database' => config('nacos_config.mysql.database','hyperf_dev'),
//        'port' => config('nacos_config.mysql.port','3306'),
//        'username' => config('nacos_config.mysql.username','root'),
//        'password' => config('nacos_config.mysql.password','123456'),
//        'charset' => config('nacos_config.mysql.charset', 'utf8mb4'),
//        'collation' => config('nacos_config.mysql.collation', 'utf8mb4_bin'),
//        'prefix' => config('nacos_config.mysql.prefix', ''),
//        'pool' => [
//            'min_connections' => 1,
//            'max_connections' => 10,
//            'connect_timeout' => 10.0,
//            'wait_timeout' => 3.0,
//            'heartbeat' => -1,
//            'max_idle_time' => (float) config('DB_MAX_IDLE_TIME', 60),
//        ],
//        'commands' => [
//            'gen:model' => [
//                'path' => 'app/Model',
//                'force_casts' => true,
//                'inheritance' => 'Model',
//            ],
//        ],
//    ],
    'default' => [
        'driver' => env('DB_DRIVER', 'mysql'),
        'host' => env('DB_HOST', 'localhost'),
        'database' => env('DB_DATABASE', 'hyperf'),
        'port' => env('DB_PORT', 3306),
        'username' => env('DB_USERNAME', 'root'),
        'password' => env('DB_PASSWORD', ''),
        'charset' => env('DB_CHARSET', 'utf8'),
        'collation' => env('DB_COLLATION', 'utf8_unicode_ci'),
        'prefix' => env('DB_PREFIX', ''),
        'pool' => [
            'min_connections' => 1,
            'max_connections' => 10,
            'connect_timeout' => 10.0,
            'wait_timeout' => 3.0,
            'heartbeat' => -1,
            'max_idle_time' => (float) env('DB_MAX_IDLE_TIME', 60),
        ],
        'commands' => [
            'gen:model' => [
                'path' => 'app/Model',
                'force_casts' => true,
                'inheritance' => 'Model',
            ],
        ],
    ],
];
