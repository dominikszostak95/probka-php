<?php

return [
    'database' => [
        'name' => 'sklep',
        'username' => 'root',
        'password' => 'test',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
