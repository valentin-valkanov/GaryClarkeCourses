<?php declare(strict_types=1);

namespace App;

/**
 * Class Playlist
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Playlist
{
    private ?int $id;
    private ?string $name;
    private ?string $category;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
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
    public function getCategory(): ?string
    {
        return $this->category;
    }


}