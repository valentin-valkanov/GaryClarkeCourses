<?php declare(strict_types=1);
require_once 'Song.php';

/**
 * Class PlayList
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Playlist
{
    public array $songs = [];

    public function addSong(Song $song):void
    {
        $this->songs[] = $song;
    }

    public function getLength():int
    {
        return count($this->songs);
    }
}