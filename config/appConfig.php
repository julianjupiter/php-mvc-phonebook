<?php

define('APPLICATION_NAME', 'PHP MVC Phonebook');

$configs = [
    'path' => [
        'PATH_APPLICATION' => __DIR__ . '/../application/',
        'PATH_VIEWS' => __DIR__ . '/../application/Views/',
        'PATH_ADDRESS' => 'http://localhost:8000/'
    ],

    'address' => [
        'DB_TYPE' => 'mysql',
        'DB_HOST' => 'localhost',
        'DB_PORT' => '3306',
        'DB_NAME' => 'phpmvcphonebook',
        'DB_USER' => 'root',
        'DB_PASSWORD' => 'admin123',
        'DB_CHAR_SET' => 'utf-8'
    ]
];

foreach ($configs as $config) {
    foreach ($config as $key => $value) {
        define($key, $value);
    }
}