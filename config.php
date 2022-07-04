<?php 

// in this file the settings for the PDO connection are initialized

return [
    'database' => [
        'name' => 'blog-db',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];