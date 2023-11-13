<?php
require_once 'vendor/autoload.php';
use App\Song;
use App\SongDataWriter;


$song = new Song('Yesterday', 'The Beatles', 180, new SongDataWriter());

$songAsText = $song->write(true);

dd($songAsText);