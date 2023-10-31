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
     * @var int|float
     * Song rating from 0 to 5
     * Half ratings allowed e.g. 3.5
     */
    private int|float $rating;

    /**
     * @param string $name
     * @param int $numberOfPlays
     */
    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;

    }

    /**
     * @return float|int
     */
    public function getRating(): float|int
    {
        return $this->rating;
    }

    /**
     * @param float|int $rating
     */
    public function setRating(float|int $rating): void
    {
        switch ($rating){
            case $rating < 0:
                $this->rating = 0;
                break;
            case $rating > 5;
                $this->rating = 5;
                break;
            case $rating > 0 && $rating < 5;
                $this->rating = $rating;
                break;
        }
    }
}