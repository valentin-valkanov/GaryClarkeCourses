<?php declare(strict_types=1);

namespace App;

class User implements AuthenticatedUserInterface
{
    /**
     * @param int $id
     * @param string $name
     */
    public function __construct(private int $id, public string $name)
    {
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
     * @param string $password
     * @return string
     */
    private function setPassword(string $password): string
    {
        return 'Setting password... ';
    }
}