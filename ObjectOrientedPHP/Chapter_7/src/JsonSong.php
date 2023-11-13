<?php declare(strict_types=1);

namespace App;

use JsonException;

/**
 * Class JsonSong
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class JsonSong extends Song
{
    /**
     * @throws JsonException
     */
    public function write(): string
    {
        return json_encode($this, JSON_THROW_ON_ERROR);
    }
}