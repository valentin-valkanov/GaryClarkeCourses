<?php
require_once 'Song.php';

$song = new SongChapter_4('Yesterday', 100);
$song->setRating(3.5);
echo $song->getRating();