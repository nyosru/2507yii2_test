<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


$e = [
    'class' => 'yii\db\Connection',
    'dsn' => ($_ENV['DB_HOST'] ?? 'mysql:host=db;dbname=db_yii2;port=3306'),
    'username' => ($_ENV['DB_USERNAME'] ?? 'root'),
    'password' => ($_ENV['DB_PASSWORD'] ?? ''),
    'charset' => ($_ENV['DB_CHARSET'] ?? 'utf8'),
];

//die(print_r($e, true));

return $e;