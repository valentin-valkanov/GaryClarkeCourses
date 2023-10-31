<?php
require_once 'SongHolder.php';
require_once 'Album.php';
require_once 'Connection.php';

$album = new Album();
echo $album->getClassName() .PHP_EOL;

$connection = new Connection();
echo $connection->getClassName() .PHP_EOL;
