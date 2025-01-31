<?php

$dsn = 'mysql:host=localhost;dbname=test';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "连接成功";
} catch (PDOException $e) {
    echo $e->getMessage();
}

