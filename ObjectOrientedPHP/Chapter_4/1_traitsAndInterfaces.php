<?php

require_once 'Book.php';
require_once 'Song.php';

$book = new Book();
try {
    echo $book->getHexId();
} catch (Exception $e) {
}

$song = new Song();
try {
    echo $song->getHexId() . PHP_EOL;
} catch (Exception $e) {
}