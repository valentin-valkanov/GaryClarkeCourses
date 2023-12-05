<?php

use App\Video;
use App\Song;

require_once 'vendor/autoload.php';

$playlist = new \App\Playlist("Gary's playlist");

$songOne = new Song('Song One');
$songTwo = new Song('Song Two');
$videoOne = new Video('Video One');
$videoTwo = new Video('Video Two');

$playlist->addItem($songOne);
$playlist->addItem($songTwo);
$playlist->addItem($videoOne);
$playlist->addItem($videoTwo);

$playlist->play();