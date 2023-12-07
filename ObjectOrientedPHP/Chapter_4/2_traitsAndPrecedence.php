<?php

require_once 'Song.php';


$song = new Song();
echo $song-> getId() . PHP_EOL;
try {
    echo $song->getHexId() . PHP_EOL;
} catch (Exception $e) {
}
try {
    echo $song->getOriginalHexId() . PHP_EOL;
} catch (Exception $e) {
}
