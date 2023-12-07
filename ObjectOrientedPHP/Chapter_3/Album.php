<?php
declare(strict_types=1);

require_once 'Printable.php';

class Album implements SongHolder
{
    use Printable;
    private array $songs = [];

    public function addSong(Song $song): void
    {
        $this->songs[] = $song;
    }

    public function getSongs(): array
    {
       return $this->songs;
    }
}