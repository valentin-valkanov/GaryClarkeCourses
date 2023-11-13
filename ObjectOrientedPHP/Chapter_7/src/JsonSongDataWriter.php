<?php declare(strict_types=1);

namespace App;

/**
 * Class JsonSongDataWriter
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class JsonSongDataWriter extends SongDataWriter
{
    /**
     * @throws \JsonException
     */
    public function write(Song $song): string
    {
        return json_encode($song, JSON_THROW_ON_ERROR);
    }
}