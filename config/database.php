<?php

use Illuminate\Support\Str;

$DATABASE_URL = parse_url( env('DATABASE_URL') );

return [
    'default' => env( 'LARA_DB_CONNECTION', 'mysql' ),

    'connections' => [

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('LARA_DB_HOST', '127.0.0.1'),
            'port' => env('LARA_DB_PORT', '3306'),
            'database' => env('LARA_DB_DATABASE', 'forge'),
            'username' => env('LARA_DB_USERNAME', 'forge'),
            'password' => env('LARA_DB_PASSWORD', ''),
            'unix_socket' => env('LARA_DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => $DATABASE_URL["host"],
            'port' => $DATABASE_URL["port"],
            'database' => ltrim($DATABASE_URL["path"], "/"),
            'username' => $DATABASE_URL["user"],
            'password' => $DATABASE_URL["pass"],
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'require',
        ],

    ],

    'migrations' => 'migrations',
];
