<?php
declare(strict_types=1);
include_once 'Song.php';

$song = new Song('Blackbird', 15);
print $song->name;
