<?php


return [
    'enable' => [
        // 开启服务发现
        'discovery' => true,
        // 开启服务注册
        'register' => true,
    ],
    'consumers' => [
    ],
    'providers' => [
    ],
    // 服务驱动相关配置
    'drivers' => [
        'nacos' => [
            'host' => '192.168.0.99',
            'port' => 8848,
            'username' => 'nacos',
            'password' => 'nacos',
            'guzzle' => [
                'config' => null,
            ],
            'group_name' => 'DEFAULT_GROUP',
            'namespace_id' => 'public',
            'heartbeat' => 5,
        ],
    ],
];
