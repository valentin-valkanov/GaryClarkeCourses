<?php
require_once 'Song.php';

$songTitles = ['Yesterday', 'Help', 'Something'];
$song = new Song($songTitles[0], 100);


$song->name = $songTitles[1];

var_dump($song->name);