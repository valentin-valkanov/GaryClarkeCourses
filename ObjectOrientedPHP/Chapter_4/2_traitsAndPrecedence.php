<?php

require_once 'Song.php';


$song = new Song();
echo $song-> getId() . PHP_EOL;
echo $song-> getHexId() . PHP_EOL;
echo $song->getOriginalHexId() . PHP_EOL;
