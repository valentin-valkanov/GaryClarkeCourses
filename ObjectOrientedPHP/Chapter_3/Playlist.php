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
    /**
     * @var array
     */
    private array $songs = [];

    /**
     * @return array
     */
    public function getSongs(): array
    {
        return $this->songs;
    }

    /**
     * @param Song $song
     * @return void
     */
    public function addSong(Song $song):void
    {
        $this->songs[] = $song;
    }

    /**
     * @return int
     */
    public function getLength():int
    {
        return count($this->songs);
    }
}