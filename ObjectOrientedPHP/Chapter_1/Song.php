<?php declare(strict_types=1);


/**
 * Class Song
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Song
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var int
     */
    public int $numberOfPlays;

    /**
     * @param string $name
     * @param int $numberOfPlays
     */
    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }
}