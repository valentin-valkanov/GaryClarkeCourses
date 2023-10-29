<?php
declare(strict_types=1);
require_once 'Playlist.php';
require_once 'Song.php';


$playlist = new Playlist;

$song1 = new Song('Blackbird', 15);
$song2 = new Song('Yesterday', 15);

$playlist->addSong ($song1);
$playlist->addSong ($song2);

foreach ($playlist->songs as $song){
    echo $song->name . PHP_EOL;
}