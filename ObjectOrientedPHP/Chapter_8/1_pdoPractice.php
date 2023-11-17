<?php
use \App\Connection;
use App\Playlist;
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

//$stmt = $pdo->prepare('INSERT INTO playlist (name, category) VALUES (:name, :category)');
//$stmt->execute(['name' => 'Beach Party', 'category' => 'dance']);
//$inserted = $stmt->rowCount();

//$sql = 'UPDATE playlist SET name = :name WHERE id = :id';
//$pdo->prepare($sql)->execute(['name' => 'Total 80s Power Ballads', 'id' => 1]);

//$stmt = $pdo->query('SELECT name FROM playlist');
//foreach ($stmt as $row){
//    print $row['name'] . PHP_EOL;
//}

$stmt = $pdo->prepare('SELECT name FROM playlist WHERE id = :id');
$stmt->execute(['id' => 1]);
$name = $stmt->fetchColumn();

$count = $pdo->query('SELECT count(*) FROM playlist')->fetchColumn();

$playlists = $pdo->query('SELECT * FROM playlist')->fetchAll(PDO::FETCH_CLASS, \App\Playlist::class);

foreach ($playlists as $playlist){
    print $playlist->getName() . PHP_EOL;
}

