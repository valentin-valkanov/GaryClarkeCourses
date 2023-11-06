<?php declare(strict_types=1);
require_once 'Printable.php';

/**
 * Class Album
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Album implements SongHolder
{
    use Printable;
    private array $songs = [];

    /**
     * @param SongChapter_4 $song
     * @return void
     */
    public function addSong(SongChapter_4 $song): void
    {
        $this->songs[] = $song;
    }

    /**
     * @return array
     */
    public function getSongs(): array
    {
       return $this->songs;
    }

}