<?php

use JetBrains\PhpStorm\Pure;

require_once 'vendor/autoload.php';

$song = new \App\Song('Help', 'The Beatles', 180);

$songInfo = $song->write(new class implements \App\SongWriterInterface{
    #[Pure] public function write(\App\Song $song): string
    {
        return $song->title . ' by ' . $song->artist . ' ' . $song->getDurationInMinutes();
    }
});

print $songInfo . PHP_EOL;