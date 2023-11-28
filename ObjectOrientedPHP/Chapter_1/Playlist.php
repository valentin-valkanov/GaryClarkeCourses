<?php
declare(strict_types=1);
require_once 'Song.php';

class Playlist
{
    private array $songs = [];

    public function getSongs(): array
    {
        return $this->songs;
    }

    public function addSong(Song $song): void
    {
        $this->songs[] = $song;
    }

    public function getLength(): int
    {
        return count($this->songs);
    }
}