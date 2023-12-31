<?php declare(strict_types=1);

namespace App;
use JetBrains\PhpStorm\Pure;
use JsonException;

/**
 * Class Song
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Song
{
    public function __construct(public string $title,
                                public string $artist,
                                public int $duration)
    {
    }

    /**
     * @return string
     */
    public function write(SongWriterInterface $writer): string
    {
        return $writer->write($this);
    }

    public function getDurationInMinutes(): string
    {
        $seconds = $this->duration % 60;
        $seconds = str_pad((string)$seconds, 2 ,'0', STR_PAD_RIGHT);
        $minutes = (int)(($this->duration - $seconds) / 60);
        return $minutes . ':' . $seconds . PHP_EOL;
    }
}