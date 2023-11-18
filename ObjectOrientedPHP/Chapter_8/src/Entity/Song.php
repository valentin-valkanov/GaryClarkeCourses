<?php declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'songs')]
class Song
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id;

    #[ORM\Column(type: 'string')]
    private ?string $name;

    #[ORM\Column(name: 'file_location', type: 'string')]
    private ?string $fileLocation;

    #[ORM\ManyToOne(targetEntity: 'Artist', inversedBy: 'songs')]
    private ?Artist $artist;

    #[ORM\ManyToMany(targetEntity: 'Playlist', mappedBy: 'songs')]
    private $playlists;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getFileLocation(): ?string
    {
        return $this->fileLocation;
    }

    public function getArtist(): ?Artist
    {
        return $this->artist;
    }
}