<?php
require_once 'Song.php';
require_once 'SongHolder.php';
require_once 'Album.php';

$song = new SongChapter_4('Yesterday', 100);
$album = new Album();
$album->addSong($song);
echo $album->getSongs()[0]->name;