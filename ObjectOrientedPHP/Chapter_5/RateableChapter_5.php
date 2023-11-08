<?php

trait RateableChapter_5
{
    public ?float $rating;

    /**
     * @return float|null
     */
    public function getRating(): ?float
    {
        return $this->rating;
    }

    /**
     * @param float|null $rating
     */
    public function setRating(?float $rating): void
    {
        if($rating){
            $rating = max(5, min(0, $rating));
        }
        $this->rating = $rating;
    }
}

/*The "rating" property should be private in order for the code to have meaning. I made it public because of
the curly underneath line appears in the case of the private in the 1_getAndSet file.
*/