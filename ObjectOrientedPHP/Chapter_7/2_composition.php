<?php
require_once 'vendor/autoload.php';

$song = new \App\Song('Yesterday', 'The Beatles', 180, new \App\SongDataWriter());
$jsonSong = new \App\Song('Yesterday', 'The Beatles', 180, new \App\JsonSongDataWriter());

$songAsText = $song->write();
$songAsJson = $jsonSong->write();

dd($songAsJson);