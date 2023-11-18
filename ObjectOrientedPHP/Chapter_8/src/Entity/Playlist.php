<?php declare(strict_types=1);

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

#[ORM\Entity]
#[ORM\Table(name: 'playlists')]
class Playlist
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(type: 'string')]
    private string $name;

    #[ORM\Column(type: 'string')]
    private string $category;

    #[ORM\ManyToMany(targetEntity: 'Song', inversedBy: 'playlists')]
    #[ORM\JoinTable(name: 'playlist_song')]
    private ArrayCollection $songs;

    #[Pure]
    public function __construct()
    {
        $this->songs = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @return ArrayCollection
     */
    public function getSongs()
    {
        return $this->songs;
    }


}

