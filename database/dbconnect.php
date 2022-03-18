<?php

$dsn  = 'mysql:dbname=dwwm2022-1;host=localhost';
$user = 'root';
$password = '30122001';

try {
    $dbConnect = new PDO($dsn, $user, $password);
} catch (PDOException $exception) {
    echo '<div class="alert alert-warning">Erreur ! ' . $exception->getMessage() . '</div>';
    die;
}