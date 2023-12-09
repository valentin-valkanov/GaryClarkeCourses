<?php

require_once 'BookChapter_4.php';
require_once 'Song.php';

$book = new BookChapter_4('id', 'Gary');
try {
    echo $book->getHexId();
} catch (Exception $e) {
}

$song = new Song();
try {
    echo $song->getHexId() . PHP_EOL;
} catch (Exception $e) {
}