<?php declare(strict_types=1);

require_once 'IdentifiableChapter4.php';
require_once 'IdentifiableTrait.php';

/**
 * Class Book
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class BookChapter_4 implements IdentifiableChapter4
{
    use IdentifiableTrait;

    /**
     * @var string
     */
    private string $id;
    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $id
     * @param string $name
     */

    public function __construct(string $id, string $name )
    {
        $this->setId($id);
        $this->setName($name);
    }

    /**
     * @param string $id
     * @return void
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
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
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}