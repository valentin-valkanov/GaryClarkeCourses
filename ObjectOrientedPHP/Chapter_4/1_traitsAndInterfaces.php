<?php

require_once 'BookChapter_4.php';
require_once 'SongChapter_4.php';

$book = new BookChapter_4();
try {
    echo $book->getHexId();
} catch (Exception $e) {
}

$song = new SongChapter_4();
try {
    echo $song->getHexId() . PHP_EOL;
} catch (Exception $e) {
}