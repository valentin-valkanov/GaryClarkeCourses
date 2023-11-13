<?php declare(strict_types=1);

namespace App;

use JetBrains\PhpStorm\Pure;

/**
 * Class SongDataWriter
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class SongDataWriter
{
    #[Pure]
    public function write(Song $song):string
    {
        return $song->title . ' - ' . $song->artist . ' - ' . $song->getDurationInMinutes();
    }
}