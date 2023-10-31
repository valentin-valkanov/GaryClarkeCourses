<?php
require_once 'Song.php';

$song = new Song('Yesterday', 100);
$song->setRating(3.5);
echo $song->getRating();