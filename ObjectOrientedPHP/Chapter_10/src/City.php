<?php declare(strict_types=1);

namespace App;

/**
 * Class City
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 */
class City
{
    public function __construct(
        private ?string $name = null,
        private ?string $country = null,
        private ?int $population = null
    )
    {
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @return int|null
     */
    public function getPopulation(): ?int
    {
        return $this->population;
    }

    /**
     * @param int|null $population
     */
    public function setPopulation(?int $population): void
    {
        $this->population = $population;
    }


}