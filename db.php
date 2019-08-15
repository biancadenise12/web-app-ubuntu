<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'a7f2f4ab8510'; // <<<<<<<<<< replace IP if needed
$db   = 'dxc';
$user = 'devuser';
$pass = 'devpass';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$cover = "";
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     //throw new \PDOException($e->getMessage(), (int)$e->getCode());
    $cover = $e->getMessage(); 
}