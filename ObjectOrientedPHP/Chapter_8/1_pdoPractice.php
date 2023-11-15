<?php
use \App\Connection;
require_once 'vendor/autoload.php';

$connection = Connection::getInstance();

$pdo = $connection->getPdo();

$statement = $pdo->query('SELECT * FROM playlist');

//while($row = $statement->fetch()){
//
//    print $row['name'] . PHP_EOL;
//
//}

$stmt = $pdo->prepare('SELECT * FROM playlist WHERE name LIKE ?');
$stmt->execute(['%Ballads%']);
$playlist = $stmt->fetch();

$stmt = $pdo->prepare('SELECT * FROM playlist WHERE name LIKE :name AND category = :category');
$stmt->execute(['name' => '%Power Ballads%', 'category' => strtolower('Soft Rock')]);
$playlist = $stmt->fetch();

$stmt = $pdo->prepare('INSERT INTO playlist (name, category) VALUES (:name, :category)');
$stmt->execute(['name' => 'Beach Party', 'category' => 'dance']);
$inserted = $stmt->rowCount();

dd($playlist);
