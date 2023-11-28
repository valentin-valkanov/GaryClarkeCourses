<?php
declare(strict_types=1);
require_once 'Playlist.php';
require_once 'Song.php';


$playlist = new Playlist;

$song1 = new Song('Blackbird', 15);
$song2 = new Song('Yesterday', 15);

$playlist->addSong ($song1);
$playlist->addSong ($song2);

if($playlist->getLength() < 10){
    echo 'Short playlist...' .PHP_EOL;
}