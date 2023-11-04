<?php declare(strict_types=1);

require_once 'Identifiable.php';
require_once 'IdentifiableTrait.php';

/**
 * Class Book
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Book implements Identifiable
{
    use IdentifiableTrait;

    private int $id;
    private string $name;

    public function __construct(int $id, string $name )
    {
        $this->setId($id);
        $this->setName($name);
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}