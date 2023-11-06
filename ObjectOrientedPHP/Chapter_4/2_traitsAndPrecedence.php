<?php

require_once 'SongChapter_4.php';


$song = new SongChapter_4();
echo $song-> getId() . PHP_EOL;
try {
    echo $song->getHexId() . PHP_EOL;
} catch (Exception $e) {
}
try {
    echo $song->getOriginalHexId() . PHP_EOL;
} catch (Exception $e) {
}
